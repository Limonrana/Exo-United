<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
     * Show the application new order.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function NewOrder()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        $new_orders     = Order::where('user_id', Auth::user()->id)->where(function ($q) { $q->where('status', 1)->orWhere('status', 0);})->paginate(5);
        return view('customer-dashboard.new-orders', compact('new_orders', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }


    /**
     * Show the application complete order.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function CompleteOrder()
    {
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        $complete_orders     = Order::where('user_id', Auth::id())->where('status', 2)->paginate(5);
        return view('customer-dashboard.complete-orders', compact( 'complete_orders', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

}
