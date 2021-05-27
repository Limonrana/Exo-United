<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    /**
     * Winner view page.
     *
     * @return //view
     */

    public function index()
    {
        $winner = Winner::paginate(10);
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.winner', compact('winner','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }

    /**
     * Show the application winner single page.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function view($slug, $ran)
    {
        $winner = Winner::where('slug', $slug)->first();
        $meta_title = null;
        $meta_author = null;
        $meta_keywords = null;
        $meta_description = null;
        return view('pages.single-winner', compact('winner','meta_title', 'meta_author', 'meta_description', 'meta_keywords'));
    }
}
