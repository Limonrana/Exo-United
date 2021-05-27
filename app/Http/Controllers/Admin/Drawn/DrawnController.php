<?php

namespace App\Http\Controllers\Admin\Drawn;

use App\Http\Controllers\Controller;
use App\Mail\WinnerMail;
use App\Models\Admin\Drawn;
use App\Models\Admin\Entrylevel;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetail;
use App\Models\Admin\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\If_;

class DrawnController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application All pending drawn.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function pending()
    {
        $experience = Product::where('drawn', 0)->paginate();
        return view('admin.pages.drawn.pending', compact('experience'));
    }

    /**
     * Show the application All complete drawn.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function complete()
    {
        $complete = Drawn::where('status', 1)->paginate();
        return view('admin.pages.drawn.complete', compact('complete'));
    }

    /**
     * Show the application All Drawn Result.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function view($id)
    {
        $winner = Drawn::where('id', $id)->first();
        return view('admin.pages.drawn.view', compact('winner'));
    }

    /**
     * Send Invoice for the winner of application.
     *
     * @return //\Illuminate\Contracts\Support\mail
     */

    public function invoice($id)
    {
        $winner_all     = Drawn::where('id', $id)->first();
        $order_select   = Order::where('id', $winner_all->order_id)->first();
        $exp_all        = Product::where('id', $winner_all->experience_id)->where('drawn', 1)->first();
        if ($winner_all->free_user_id == null) {
            $email          = $winner_all->user->email;
        }
        else {
            $email          = $winner_all->free_user->email;
        }
        $data ['exp_all']               = $exp_all;
        $data ['order_select']          = $order_select;
        $data ['winner_all']            = $winner_all;

        //Mail Send
        Mail::to($email)->send(new WinnerMail($data));
        $notification = array(
            'messege' => 'Invoice send successfully!',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application All Drawn Result.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function result($id)
    {
        $experience = Product::find($id);
        if ($experience->drawn == 0) {
            $experience->drawn = 1;
            $experience->save();
            $order_select = Order::where('exp_id', $id)->where('status', 1)->orderByRaw('RAND()')->take(1)->first();
            $order = Order::where('exp_id', '=', $id)
                ->update(['status' => 2]);
            $order_details = OrderDetail::where('order_id', $order_select->id)->first();
            session()->put('drawn', [
                'user_id'           => $order_select->user_id,
                'free_user_id'      => $order_select->free_user_id,
                'order_id'          => $order_select->id,
                'exp_id'            => $experience->id,
                'entry_id'          => $order_details->entry_id,
            ]);

            $drawn_data                     = new Drawn();
            $drawn_data->experience_id      = session()->get('drawn')['exp_id'];
            $drawn_data->user_id            = session()->get('drawn')['user_id'];
            $drawn_data->free_user_id       = session()->get('drawn')['free_user_id'];
            $drawn_data->order_id           = session()->get('drawn')['order_id'];
            $drawn_data->entry_id           = session()->get('drawn')['entry_id'];
            $drawn_data->status             = 1;
            $drawn_data->save();

            $winner_all = Drawn::where('id', $drawn_data->id)->first();
            $exp_all    = Product::where('id', $id)->where('drawn', 1)->first();
            if ($winner_all->free_user_id == null) {
                $email      = $winner_all->user->email;
            }
            else {
            $email = $winner_all->free_user->email;
            }
            $data ['exp_all']               = $exp_all;
            $data ['order_select']          = $order_select;
            $data ['winner_all']            = $winner_all;

            //Mail Send
            Mail::to($email)->send(new WinnerMail($data));

            if (Session::has('drawn')) {
                Session::forget('drawn');
            }

            $notification = array(
                'messege' => 'Drawn Processing....Please Wait 30 Seconds!',
                'alert-type' => 'success'
            );
            $winner = Drawn::where('id', $drawn_data->id)->first();
            if ($winner_all->free_user_id == null) {
                return view('admin.pages.drawn.result', compact('winner', 'notification'))->with($notification);
            }
            else {
                return view('admin.pages.drawn.free-result', compact('winner', 'notification'))->with($notification);
            }
        }
        else {
            $notification = array(
                'messege' => 'Drawn Already Completed!',
                'alert-type' => 'warning'
            );
            return back()->with($notification);
        }
    }
}
