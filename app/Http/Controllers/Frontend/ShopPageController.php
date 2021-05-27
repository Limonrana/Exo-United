<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Charity;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class ShopPageController extends Controller
{

    /**
     * Show the application product frontend.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trending       = Product::latest()->where('status', 1)->paginate(12);
        $charity        = Charity::all();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.experience', compact('trending', 'charity', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Show the application product.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function view($slug, $ran)
    {
        $single_exp = Product::where('slug', $slug)->first();
        $meta_title = $single_exp->seo_title;
        $meta_author = null;
        $meta_keywords = $single_exp->meta_keywords;
        $meta_description = $single_exp->meta_description;
        return view('pages.single-experience', compact('single_exp','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
