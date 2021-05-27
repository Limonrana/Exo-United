<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('customer-dashboard.dashboard', compact('meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Show the application account.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function account()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        $profile = User::where('id', Auth::id())->first();
        return view('customer-dashboard.my-account', compact('profile', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Show the application billing address.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function billing()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('customer-dashboard.billing', compact('meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Show the application new order.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function show()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        $profile = User::where('id', Auth::id())->first();
        return view('customer-dashboard.my-account', compact('profile', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Single View the application order.
     *
     * @return //id view
     */

    public function view($id)
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        $order = Order::where('id', $id)->first();
        $order_details = OrderDetail::where('order_id', $id)->get();
        return view('customer-dashboard.view-order', compact('order', 'order_details', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * update existing customer.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'          => 'required|max:85',
            'email'         => 'required|max:55',
        ]);

        $customer               = User::find($id);
        $customer->name         = $request->name;
        $customer->email        = $request->email;
        $customer->phone        = $request->phone;
        $customer->address_1    = $request->address_1;
        $customer->address_2    = $request->address_2;
        $customer->city         = $request->city;
        $customer->state        = $request->state;
        $customer->zip          = $request->zip;
        $customer->country      = $request->country;

        $customer->save();
        $notification = array(
            'messege' => 'Profile successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
