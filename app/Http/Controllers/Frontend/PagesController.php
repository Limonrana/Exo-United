<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\InvoiceMail;
use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Charity;
use App\Models\Admin\Contact;
use App\Models\Admin\Newsletter;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetail;
use App\Models\Admin\Page;
use App\Models\Admin\Product;
use App\Models\Frontend\FreeEntry;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Cart;

class PagesController extends Controller
{
    /**
     * Show the application about page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function about()
    {
        $get        = About::where('id', 1)->first();
        $charity    = Charity::all();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.about', compact('get', 'charity', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Show the application contact page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        $get = Contact::where('id', 1)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.contact', compact('get','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Send a new email from contact page.
     *
     * @param  //Request  $request //Mail
     * @return //Response
     */

    public function mail( Request $request)
    {
        $validatedData = $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_phone' => 'required',
            'contact_message' => 'required',
        ]);

        $get_mail = Contact::where('id', 1)->first();
        $data = $request;
        //Mail Send
        Mail::to("$get_mail->notification_email")->send(new ContactMail($data));

        $notification=array(
            'messege'=>'Contact email send successfully done',
            'alert-type'=>'success'
        );
        return back()->with($notification);

    }

    /**
     * Store a new newsletter email.
     *
     * @param  //Request  $request
     * @return //Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email'         => 'required|email|unique:newsletters|max:55',
        ]);
        $newsletter         = new Newsletter();
        $newsletter->email  = $request->email;
        $newsletter->save();
            $notification=array(
                'messege'=>'Thanks for subscribing here',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
    }


    /**
     * Terms & Conditions view page.
     *
     * @return //view
     */

    public function terms()
    {
        $get = Page::where('id', 2)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.terms & conditions', compact('get','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Privacy Policy view page.
     *
     * @return //view
     */

    public function privacy()
    {
        $get = Page::where('id', 1)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.privacy', compact('get','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Roles view page.
     *
     * @return //view
     */

    public function roles()
    {
        $get = Page::where('id', 3)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.roles', compact('get','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    public function FreeEnter($rand, $id)
    {
        $exp   = Product::where('id', $id)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.free-entry', compact('exp','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }


    /**
     * Store a free entry user and order.
     *
     * @param  //Request  $request
     * @return //Response
     */

    public function FreeOrder($rand, $id, Request $request)
    {
        $exp = Product::where('id', $id)->first();
        $validatedData = $request->validate([
            'name'          => 'required',
            'phone'         => 'required',
            'email'         => 'required',
            'address'       => 'required',
            'city'          => 'required',
            'zip'           => 'required',
            'country'       => 'required',
            'state'         => 'required',
        ]);

        $free               = new FreeEntry();
        $free->exp_id       = $request->exp_id;
        $free->name         = $request->name;
        $free->phone        = $request->phone;
        $free->email        = $request->email;
        $free->address      = $request->address;
        $free->city         = $request->city;
        $free->zip          = $request->zip;
        $free->country      = $request->country;
        $free->state        = $request->state;
        $free->save();

        //Order Create
        $free_tans_id           = "Free-".uniqid();
        $order                  = new Order();
        $order->free_user_id    = $free->id;
        $order->exp_id          = $exp->id;
        $order->payment_id      = $free_tans_id;
        $order->transaction_id  = $free_tans_id;
        $order->payment_type    = "FREE";
        $order->ran_order_id    = 'EXO-' . mt_rand(100000, 999999);
        $order->order_amount    = "0.00";
        $order->name            = $free->name;
        $order->email           = $free->email;
        $order->phone           = $free->phone;
        $order->address         = $free->address;
        $order->city            = $free->city;
        $order->state           = $free->state;
        $order->zip             = $free->zip;
        $order->country         = $free->country;
        $order->status          = 0;
        $order->refund          = 0;
        $order->month           = date("m");
        $order->date            = date("d-m-Y");
        $order->year            = date("Y");
        $order->save();

        $details = new OrderDetail();
        $details->order_id      = $order->id;
        $details->entry_id      = 0;
        $details->exp_id        = $exp->id;
        $details->exp_title     = $exp->exp_title;
        $details->entry_title   = "Free Entries";
        $details->quantity      = "1";
        $details->entry_price   = "0.00";
        $details->total_price   = "0.00";
        $details->save();

        $free_update            = FreeEntry::find($free->id);
        $free_update->order_id  = $order->id;
        $free_update->save();

        $data ['order']             = $order;
        $data ['details']           = $details;

        //Mail Send
        Mail::to($order->email)->send(new InvoiceMail($data));

        $notification = array(
            'messege' => 'You have been entered successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('free.order.confirm.page')->with($notification);
    }

    /**
     * Show the application Free Order Confirm Page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function ConfirmFree()
    {
        $order = Order::latest()->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.order-confirm', compact('order','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
