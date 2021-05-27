<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Entrylevel;
use App\Models\Admin\Product;
use Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CartPageController extends Controller
{
    /**
     * Add to cart view page.
     *
     * @param  //cart::content
     * @return //view
     */
    public function index()
    {
        $cart = Cart::content();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.cart', compact('cart', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Add to cart single product page.
     *
     * @param  //Request  $request
     * @return //Response
     */
    public function Cart(Request $request ,$id)
    {
        $cart = Cart::Content();
        if ($cart) {
            if (count($cart) == 1) {
                Cart::destroy();
                $entry = Entrylevel::where('id', $id)->first();
                $exp   = Product::where('id', $entry->experience_id)->first();
                $data = array();
                $data['id'] = $entry->id;
                $data['name'] = $exp->exp_title;
                $data['qty'] = 1;
                $data['price'] = $entry->entry_price;
                $data['weight'] = 1;
                $data['options']['experience_id'] = $exp->id;
                $data['options']['category_id'] = $exp->category_id;
                $data['options']['entry_number'] = $entry->entry_quantity;
                $data['options']['image'] = $exp->featured_image;
                Cart::add($data);
                $notification = array(
                    'messege' => 'Successfully added on your Cart',
                    'alert-type' => 'success'
                );
                return redirect()->route('cart.page')->with($notification);
            }
            else {
                $entry = Entrylevel::where('id', $id)->first();
                $exp   = Product::where('id', $entry->experience_id)->first();
                $data = array();
                $data['id'] = $entry->id;
                $data['name'] = $exp->exp_title;
                $data['qty'] = 1;
                $data['price'] = $entry->entry_price;
                $data['weight'] = 1;
                $data['options']['experience_id'] = $exp->id;
                $data['options']['category_id'] = $exp->category_id;
                $data['options']['entry_number'] = $entry->entry_quantity;
                $data['options']['image'] = $exp->featured_image;
                Cart::add($data);
                $notification = array(
                    'messege' => 'Successfully added on your Cart',
                    'alert-type' => 'success'
                );
                return redirect()->route('cart.page')->with($notification);
            }
        }
    }

    /**
     * Remove cart from single product page.
     *
     * @param  //id
     * @return //Response
     */

    public function Delete($id)
    {
        Cart::remove($id);
        $notification['messege'] = 'Successfully deleted your Cart';
        $notification['alert-type'] = 'success';

        return back()->with($notification);
    }

    /**
     * Remove  all cart from cart page.
     *
     * @param  //id
     * @return //Response
     */

    public function AllDelete()
    {
        Cart::destroy();
        $notification['messege'] = 'Successfully clear cart page';
        $notification['alert-type'] = 'success';

        return back()->with($notification);
    }

}
