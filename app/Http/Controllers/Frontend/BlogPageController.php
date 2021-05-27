<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\Admin\Postcategory;
use App\Models\Admin\Posttag;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    /**
     * Blog view page.
     *
     * @return //view
     */
    public function index()
    {
        $blog           = Post::orderBy('id', 'desc')->where('status', 1)->paginate(4);
        $date           = Post::orderBy('id', 'desc')->where('status', 1)->get();
        $latest_post    = Post::latest()->where('status', 1)->take(3)->get();
        $category       = Postcategory::orderBy('category_name_en', 'asc')->take(10)->get();
        $tag            = Posttag::orderBy('tag_name_en', 'asc')->get();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.blog', compact('blog', 'category', 'latest_post', 'date', 'tag', 'meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Single Blog view page.
     *
     * @parm //$id $slug $rand
     * @return //view
     */

    public function view($slug, $ran)
    {
        $single_blog = Post::where('slug', $slug)->first();
        $date           = Post::orderBy('id', 'desc')->where('status', 1)->get();
        $latest_post    = Post::latest()->where('status', 1)->take(4)->get();
        $category       = Postcategory::orderBy('category_name_en', 'asc')->take(10)->get();
        $tag            = Posttag::orderBy('id', 'asc')->get();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.single-blog', compact('single_blog', 'category', 'latest_post', 'date', 'tag','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Blog view page.
     *
     * @return //view
     */
    public function taxonomy($name, $id)
    {
        $title          = $name;
        $blog           = Post::orderBy('id', 'desc')->where('status', 1)->where('category_id', $id)->paginate(3);
        $date           = Post::orderBy('id', 'desc')->where('status', 1)->get();
        $latest_post    = Post::latest()->where('status', 1)->take(3)->get();
        $category       = Postcategory::orderBy('category_name_en', 'asc')->take(10)->get();
        $tag            = Posttag::orderBy('tag_name_en', 'asc')->get();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.taxonomy-blog', compact('blog', 'category', 'latest_post', 'date', 'tag', 'title','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
