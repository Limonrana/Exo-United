<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Charity;
use App\Models\Admin\Home;
use App\Models\Admin\Homenext;
use App\Models\Admin\Post;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\Admin\Winner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application product home page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home       = Home::where('id', 1)->first();
        $home_2     = Homenext::where('id', 1)->first();
        $featured   = Product::latest()->where('status', 1)->limit($home->featured_exp_display)->get();
        $with_exo   = Product::orderBy('id', 'asc')->where('status', 1)->limit($home->exo_exp_display)->get();
        $last       = Product::orderBy('id', 'desc')->where('status', 1)->limit($home->last_exp_display)->get();
        $category   = Category::orderBy('category_name', 'asc')->limit(9)->get();
        $l_winner   = Winner::latest()->limit($home_2->winner_display)->get();
        $charity    = Charity::all();
        $banner     = Banner::where('status', 1)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.index', compact('category','featured', 'with_exo', 'last', 'home', 'home_2', 'l_winner', 'charity', 'banner', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
