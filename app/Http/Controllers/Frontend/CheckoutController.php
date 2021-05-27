<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\InvoiceMail;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetail;
use App\Models\Frontend\Country;
use App\Models\Frontend\State;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;

class CheckoutController extends Controller
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
     * Show the application checkout.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $cart       = Cart::Content();
        if (count($cart) != 0) {
            $meta_title = null;
            $meta_author = null;
            $meta_keywords = null;
            $meta_description = null;
            return view('pages/checkout', compact('cart','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
        }
        else {
            return redirect()->route('cart.page');
        }
    }

    /**
     * Create a new order data store on session.
     *
     * @param  //Request  $request
     * @return //Response
     */

    public function Order(Request $request)
    {
        $user_id = Auth::id();
        $subtotal = Cart::Subtotal();
        session()->put('order', [
            'user_id'      => $user_id,
            'total'        => $subtotal,
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'address'      => $request->address_1,
            'city'         => $request->city,
            'state'        => $request->state,
            'zip'          => $request->zip,
            'country'      => $request->country,
        ]);

        return redirect()->route('order.payment.page');

    }

    /**
     * Payment Form Show.
     *
     * @return //view
     */

    public function PaymentShow()
    {
        $cart       = Cart::Content();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        if (count($cart) != 0 && Session::has('order')) {
            return view('pages.checkout-review', compact('cart','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
        }
        else {
            return redirect()->route('cart.page');
        }
    }

    /**
     * Create a new order store and payment.
     *
     * @param  //Request  $request
     * @return //Response
     */

    public function Payment(Request $request)
    {
        if ($request->payment_type == 'stripe') {


            return redirect()->route('stripe.payment.page');

        }
        else {

            return redirect()->route('paypal.payment.page');

        }
    }


    /**
     * Show the application Order Confirm Page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function Confirm()
    {
        $order = Order::where('user_id', Auth::user()->id)->latest()->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.order-confirm', compact('order','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
