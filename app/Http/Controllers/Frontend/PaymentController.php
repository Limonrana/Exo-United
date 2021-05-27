<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\InvoiceMail;
use App\Mail\OrderNotification;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;

class PaymentController extends Controller
{
    /**
     * Redirect the application PayPal Link.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function getExpressCheckout()
    {
        $provider = new ExpressCheckout();      // To use express checkout.
        $invoiceID = 'EXO-' . mt_rand(100000, 999999);
        $checkoutData = $this->checkoutData($invoiceID);
        $response = $provider->setExpressCheckout($checkoutData);
        dd($response);
        return redirect($response['paypal_link']);
    }


    /**
     * Create a new method instance.
     *
     * @return void
     */
    protected function checkoutData($invoiceID)
    {
        $data = [];
        $data['items'] = [];
        foreach (Cart::Content() as $key=>$val) {
            $itemDetails = [
                'name'          => $val->name,
                'price'         => $val->price,
                'qty'           => $val->qty
            ];
            $data['items'][] = $itemDetails;
        }

        $data['invoice_id'] = $invoiceID;
        $data['invoice_description'] = "Donate with Experience For Exo-United";
        $data['return_url'] = route('paypal.payment.success');
        $data['cancel_url'] = route('paypal.payment.cancel');

        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['price']*$item['qty'];
        }

        $data['total'] = $total;

        return $data;
    }


    /**
     * Redirect the application PayPal Cancel Link.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function getExpressCheckoutCancel()
    {
        $notification = array(
            'messege' => 'Payment Failed! Something went wrong!',
            'alert-type' => 'error'
        );
        return redirect()->route('order.payment')->with($notification);
    }


    /**
     * Redirect the application PayPal Success Link And Order Create.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function getExpressCheckoutSuccess(Request $request)
    {
        $provider = new ExpressCheckout();
        $token = $request->token;
        $payerId = $request->PayerID;

        $response = $provider->getExpressCheckoutDetails($token);
        //dd($response);
        $invoiceID = $response['INVNUM']??'EXO-' . mt_rand(100000, 999999);
        $checkoutData = $this->checkoutData($invoiceID);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            // Perform transaction on PayPal
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if(in_array($status, ['Completed','Processed'])) {

                $email = Auth::user()->email;
                $user_id = Auth::id();
                $subtotal = Cart::Subtotal();
                $cart = Cart::Content();
                if (Session::has('order')) {
                    foreach ($cart as $val) {
                        $order                  = new Order();
                        $order->user_id         = $user_id;
                        $order->exp_id          = $val->options->experience_id;
                        $order->payment_id      = $response['PAYERID'];
                        $order->transaction_id  = $token;
                        $order->payment_type    = "paypal";
                        $order->ran_order_id    = $response['INVNUM'];
                        $order->order_amount    = $subtotal;
                        $order->name            = session()->get('order')['name'];
                        $order->email           = session()->get('order')['email'];
                        $order->phone           = session()->get('order')['phone'];
                        $order->address         = session()->get('order')['address'];
                        $order->city            = session()->get('order')['city'];
                        $order->state           = session()->get('order')['state'];
                        $order->zip             = session()->get('order')['zip'];
                        $order->country         = session()->get('order')['country'];
                        $order->status          = 1;
                        $order->refund          = 0;
                        $order->month           = date("m");
                        $order->date            = date("d-m-Y");
                        $order->year            = date("Y");
                        $order->save();
                    }

                    $product_cart = Cart::Content();
                    foreach ($product_cart as $val) {
                        $details = new OrderDetail();
                        $details->order_id      = $order->id;
                        $details->entry_id      = $val->id;
                        $details->exp_id        = $val->options->experience_id;
                        $details->exp_title     = $val->name;
                        $details->entry_title   = $val->options->entry_number."Entries";
                        $details->quantity      = $val->qty;
                        $details->entry_price   = $val->price;
                        $details->total_price   = $val->price * $val->qty;
                        $details->save();
                    }
                    $data ['order']             = $order;
                    $data ['details']           = $details;

                    //Mail Send
                    Mail::to($email)->send(new InvoiceMail($data));

                    //Mail Send order notification admin
                    Mail::to('limonrana515@gmail.com')->send(new OrderNotification($data));

                    Cart::destroy();
                    if (Session::has('order')) {
                        Session::forget('order');
                    }
                } else {
                    $notification = array(
                        'messege' => 'Billing details not found, Please submit again!',
                        'alert-type' => 'error'
                    );
                    return redirect()->route('order.payment')->with($notification);
                }

                $notification = array(
                    'messege' => 'You have been entered successfully!',
                    'alert-type' => 'success'
                );
                return redirect()->route('order.confirm.page')->with($notification);
            }

        }
        $notification = array(
            'messege' => 'Payment UnSuccessful! Something went wrong!',
            'alert-type' => 'error'
        );
        return redirect()->route('order.payment')->with($notification);
    }

    /**
     * Stripe Payment Form Show.
     *
     * @return //view
     */

    public function getStripeCheckout()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.stripe-checkout', compact('meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Redirect the application Stripe Success Link And Order Create.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function getStripeSuccess(Request $request)
    {
        $email = Auth::user()->email;
        $user_id = Auth::id();
        $subtotal = Cart::Subtotal();
        $cart = Cart::Content();

        \Stripe\Stripe::setApiKey(env("STRIPE_SECRET"));
        $stripe_payment = \Stripe\Charge::create ([
            "amount" => $subtotal * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Donate payment for Exo-United",
            "metadata"  => ['order_id' => Str::random(15)],
        ]);

        if (Session::has('order')) {
            foreach ($cart as $val) {
                $order                  = new Order();
                $order->user_id         = $user_id;
                $order->exp_id          = $val->options->experience_id;
                $order->payment_id      = $stripe_payment->payment_method;
                $order->transaction_id  = $stripe_payment->balance_transaction;
                $order->payment_type    = "stripe";
                $order->ran_order_id    = 'EXO-' . mt_rand(100000, 999999);
                $order->order_amount    = $subtotal;
                $order->name            = session()->get('order')['name'];
                $order->email           = session()->get('order')['email'];
                $order->phone           = session()->get('order')['phone'];
                $order->address         = session()->get('order')['address'];
                $order->city            = session()->get('order')['city'];
                $order->state           = session()->get('order')['state'];
                $order->zip             = session()->get('order')['zip'];
                $order->country         = session()->get('order')['country'];
                $order->status          = 1;
                $order->refund          = 0;
                $order->month           = date("m");
                $order->date            = date("d-m-Y");
                $order->year            = date("Y");
                $order->save();
            }

            $product_cart = Cart::Content();
            foreach ($product_cart as $val) {
                $details = new OrderDetail();
                $details->order_id      = $order->id;
                $details->entry_id      = $val->id;
                $details->exp_id        = $val->options->experience_id;
                $details->exp_title     = $val->name;
                $details->entry_title   = $val->options->entry_number."Entries";
                $details->quantity      = $val->qty;
                $details->entry_price   = $val->price;
                $details->total_price   = $val->price * $val->qty;
                $details->save();
            }
            $data ['order']             = $order;
            $data ['details']           = $details;

            //Mail Send
            Mail::to($email)->send(new InvoiceMail($data));

            //Mail Send order notification admin
            Mail::to('limonrana515@gmail.com')->send(new OrderNotification($data));

            Cart::destroy();
            if (Session::has('order')) {
                Session::forget('order');
            }
        } else {
            $notification = array(
                'messege' => 'Billing details not found, Please submit again!',
                'alert-type' => 'error'
            );
            return redirect()->route('order.payment')->with($notification);
        }

        $notification = array(
            'messege' => 'You have been entered successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('order.confirm.page')->with($notification);
    }
}
