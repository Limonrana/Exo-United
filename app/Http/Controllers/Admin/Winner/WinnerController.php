<?php

namespace App\Http\Controllers\Admin\Winner;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class WinnerController extends Controller
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
     * Show the application all entry.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $winner = Winner::paginate(10);
        return view('admin.pages.winner.all-winners', compact('winner'));
    }

    /**
     * Show the application add winner form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show()
    {
        $experience = Product::all();
        return view('admin.pages.winner.add-new', compact('experience'));
    }

    /**
     * Store a new entry level.
     *
     * @param  //Request  $request
     * @return //Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'                 => 'required|unique:winners|max:185',
            'winner_name'           => 'required|max:85',
            'exp_title'             => 'required',
            'winner_address'        => 'required',
            'exp_date'              => 'required',
            'winner_content'        => 'required',
            'winner_review'         => 'required',
            'winner_review_title'   => 'required',
            'donation_title'        => 'required',
            'donation_content'      => 'required',
            'slug'                  => 'required',
            'featured_image'        => 'required',
            'donation_image'        => 'required',
        ],
            [
                'exp_title' => 'The Experience title field is required',
                'exp_date' => 'The Experience date field is required',
            ]);

        $winner                         = new Winner();
        $winner->title                  = $request->title;
        $winner->winner_name            = $request->winner_name;
        $winner->exp_title              = $request->exp_title;
        $winner->winner_address         = $request->winner_address;
        $winner->exp_date               = $request->exp_date;
        $winner->winner_content         = $request->winner_content;
        $winner->winner_review          = $request->winner_review;
        $winner->winner_review_title    = $request->winner_review_title;
        $winner->donation_title         = $request->donation_title;
        $winner->donation_content       = $request->donation_content;
        $winner->slug                   = $request->slug;
        $winner->seo_title              = $request->seo_title;
        $winner->seo_slug               = $request->seo_slug;
        $winner->meta_description       = $request->meta_description;
        $winner->meta_keywords          = $request->meta_keywords;

        $featured_image                 = $request->file('featured_image');
        $gallery_image_1                = $request->file('gallery_image_1');
        $gallery_image_2                = $request->file('gallery_image_2');
        $donation_image                 = $request->file('donation_image');

        if ($featured_image) {

            $main_image = Str::random(50) . '.' . $featured_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($featured_image)->resize(744, 496)->save(public_path('uploads/winners/' . $main_image));
            $winner->featured_image = 'uploads/winners/' . $main_image;

        }
        if ($gallery_image_1) {

            $gallery_image1 = Str::random(50) . '.' . $gallery_image_1->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_1)->resize(744, 496)->save(public_path('uploads/winners/' . $gallery_image1));
            $winner->gallery_image_1 = 'uploads/winners/' . $gallery_image1;

        }

        if ($gallery_image_2) {

            $gallery_image2 = Str::random(50) . '.' . $gallery_image_2->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_2)->resize(744, 496)->save(public_path('uploads/winners/' . $gallery_image2));
            $winner->gallery_image_2 = 'uploads/winners/' . $gallery_image2;

        }

        if ($donation_image) {

            $donation_image2 = Str::random(50) . '.' . $donation_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($donation_image)->resize(744, 496)->save(public_path('uploads/winners/' . $donation_image2));
            $winner->donation_image = 'uploads/winners/' . $donation_image2;

        }

        $winner->save();
        $notification = array(
            'messege' => 'Winner successfully added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.winner')->with($notification);
    }


    /**
     * Edit existing entry.
     *
     * @param  //id
     * @return //view
     */

    public function edit($id)
    {
        $winner      = Winner::findOrFail($id);
        $experience  = Product::all();
        return view('admin.pages.winner.edit-winner', compact('winner', 'experience'));
    }

    /**
     * Update existing product.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'title'                 => 'required|max:185',
            'winner_name'           => 'required|max:85',
            'exp_title'             => 'required',
            'winner_address'        => 'required',
            'exp_date'              => 'required',
            'winner_content'        => 'required',
            'winner_review'         => 'required',
            'winner_review_title'   => 'required',
            'donation_title'        => 'required',
            'donation_content'      => 'required',
            'slug'                  => 'required',
        ],
            [
                'exp_title' => 'The Experience title field is required',
                'exp_date' => 'The Experience date field is required',
            ]);

        $winner                         = Winner::find($id);
        $winner->title                  = $request->title;
        $winner->winner_name            = $request->winner_name;
        $winner->exp_title              = $request->exp_title;
        $winner->winner_address         = $request->winner_address;
        $winner->exp_date               = $request->exp_date;
        $winner->winner_content         = $request->winner_content;
        $winner->winner_review          = $request->winner_review;
        $winner->winner_review_title    = $request->winner_review_title;
        $winner->donation_title         = $request->donation_title;
        $winner->donation_content       = $request->donation_content;
        $winner->slug                   = $request->slug;
        $winner->seo_title              = $request->seo_title;
        $winner->seo_slug               = $request->seo_slug;
        $winner->meta_description       = $request->meta_description;
        $winner->meta_keywords          = $request->meta_keywords;

        $old_featured_image             = $winner->featured_image;
        $old_gallery_image_1            = $winner->gallery_image_1;
        $old_gallery_image_2            = $winner->gallery_image_2;
        $old_donation_image             = $winner->donation_image;

        $featured_image                 = $request->file('featured_image');
        $gallery_image_1                = $request->file('gallery_image_1');
        $gallery_image_2                = $request->file('gallery_image_2');
        $donation_image                 = $request->file('donation_image');

        if ($featured_image) {

            if ($old_featured_image) {
                unlink($old_featured_image);
            }
            $main_image = Str::random(50) . '.' . $featured_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($featured_image)->resize(744, 496)->save(public_path('uploads/winners/' . $main_image));
            $winner->featured_image = 'uploads/winners/' . $main_image;

        }
        if ($gallery_image_1) {

            if ($old_gallery_image_1) {
                unlink($old_gallery_image_1);
            }
            $gallery_image1 = Str::random(50) . '.' . $gallery_image_1->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_1)->resize(744, 496)->save(public_path('uploads/winners/' . $gallery_image1));
            $winner->gallery_image_1 = 'uploads/winners/' . $gallery_image1;

        }

        if ($gallery_image_2) {

            if ($old_gallery_image_2) {
                unlink($old_gallery_image_2);
            }
            $gallery_image2 = Str::random(50) . '.' . $gallery_image_2->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_2)->resize(744, 496)->save(public_path('uploads/winners/' . $gallery_image2));
            $winner->gallery_image_2 = 'uploads/winners/' . $gallery_image2;

        }

        if ($donation_image) {

            if ($old_donation_image) {
                unlink($old_donation_image);
            }
            $donation_image2 = Str::random(50) . '.' . $donation_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($donation_image)->resize(744, 496)->save(public_path('uploads/winners/' . $donation_image2));
            $winner->donation_image = 'uploads/winners/' . $donation_image2;

        }

        $winner->save();
        $notification = array(
            'messege' => 'Winner successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.winner')->with($notification);
    }


    /**
     * Delete existing entry.
     *
     * @param  //id
     * @return //view
     */

    public function delete($id)
    {
        $winner              = Winner::find($id);
        $featured_image      = $winner->featured_image;
        $gallery_image_1     = $winner->gallery_image_1;
        $gallery_image_2     = $winner->gallery_image_2;
        $donation_image      = $winner->donation_image;
        if ($featured_image) {
            unlink($featured_image);
        }
        if ($gallery_image_1) {
            unlink($gallery_image_1);
        }
        if ($gallery_image_2) {
            unlink($gallery_image_2);
        }
        if ($donation_image) {
            unlink($donation_image);
        }
        $winner->forceDelete();
        $notification = array(
            'messege' => 'Winner successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.winner')->with($notification);
    }
}
