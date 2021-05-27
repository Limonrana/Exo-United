<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetail;
use App\Models\Admin\Experience;
use App\Models\Admin\ShippingMethod;
use App\Models\Frontend\City;
use App\Models\Frontend\Country;
use App\Models\Frontend\State;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
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
     * Show the application All orders.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function AllOrders()
    {
        $order = Order::latest()->where('free_user_id', null)->paginate(10);
        return view('admin.pages.ecommerce.all-orders', compact('order'));
    }

    /**
     * Show the application Processing orders.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function ProcessingOrders()
    {
        $order = Order::where('status', 1)->where('refund', 0)->where('free_user_id', null)->latest()->paginate(10);
        return view('admin.pages.order.processing-orders', compact('order'));
    }

    /**
     * Show the application Free orders.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function FreeOrders()
    {
        $order = Order::where('refund', 0)->where('user_id', null)->latest()->paginate(10);
        return view('admin.pages.order.free-orders', compact('order'));
    }

    /**
     * Show the application Complete orders.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function CompleteOrders()
    {
        $order = Order::where('status', 2)->where('refund', 0)->where('free_user_id', null)->latest()->paginate(10);
        return view('admin.pages.order.complete-orders', compact('order'));
    }

    /**
     * Show the application Cancel orders.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function HoldOrders()
    {
        $order = Order::where('status', 3)->where('refund', 0)->where('free_user_id', null)->latest()->paginate(10);
        return view('admin.pages.order.hold-orders', compact('order'));
    }


    /**
     * Edit existing order.
     *
     * @param  //id
     * @return //view
     */

    public function EditOrder($id)
    {
        $entry          = OrderDetail::where('order_id', $id)->paginate(5);
        $experience     = OrderDetail::where('order_id', $id)->first();
        $order_details  = Order::where('id', $id)->first();
        return view('admin.pages.order.edit-order', compact('entry', 'order_details', 'experience'));
    }

    /**
     * Edit existing order.
     *
     * @param  //id
     * @return //view
     */

    public function EditFree($id)
    {
        $experience     = OrderDetail::where('order_id', $id)->first();
        $order_details  = Order::where('id', $id)->first();
        return view('admin.pages.order.edit-order-free', compact('order_details','experience'));
    }

    /**
     * Approve a free order.
     *
     * @param  //id
     * @return //view
     */
    public function ApproveOrder($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        $notification = array(
            'messege' => 'Order successfully approved',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

    /**
     * Cancel a new order.
     *
     * @param  //id
     * @return //view
     */

    public function HoldOrder($id)
    {
        $order = Order::find($id);
        $order->status = 3;
        $order->save();
        $notification = array(
            'messege' => 'Order successfully canceled',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }


    /**
     * Delete existing product.
     *
     * @param  //id
     * @return //view
     */

    public function DeleteOrder($id)
    {
        $order = Order::find($id);
        $order->forceDelete();
        $details = OrderDetail::where('order_id', $id)->get();
        foreach ($details as $val) {
            $val->forceDelete();
        }
        $notification = array(
            'messege' => 'Order data successfully deleted',
            'alert-type' => 'error'
        );
        return back()->with($notification);
    }

}
