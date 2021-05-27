<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Charity;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class TaxonomyController extends Controller
{
    /**
     * Show the application product taxonomy page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function Category($slug)
    {
        $title = $slug;
        $cat = Category::where('slug', $slug)->first();
        $experience        = Product::where('status', 1)->where('category_id', $cat->id)->paginate(20);
        $charity           = Charity::all();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.taxonomy', compact('experience', 'charity', 'title','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
