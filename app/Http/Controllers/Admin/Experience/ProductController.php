<?php

namespace App\Http\Controllers\Admin\Experience;

use App\Http\Controllers\Controller;
use App\Models\Admin\Entrylevel;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Models\Admin\Charity;
use App\Models\Admin\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
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
     * Show the application product.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $experience = Product::paginate(10);
        $category   = Category::all();
        $charity    = Charity::all();
        return view('admin.pages.experience.all-experiences', compact('experience', 'category', 'charity'));
    }

    /**
     * Show the application product.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function view($id)
    {
        $experience = Product::where('id', $id)->first();
        $category   = Category::all();
        $charity    = Charity::all();
        return view('admin.pages.experience.view-experience', compact('experience', 'category', 'charity'));
    }

    /**
     * Show the application add product.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showForm()
    {
        $category = Category::all();
        $charity  = Charity::all();
        return view('admin.pages.experience.add-new', compact('category','charity'));
    }

    /**
     * Store a new experience.
     *
     * @param  //Request  $request
     * @return //Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'exp_title'         => 'required|unique:products|max:185',
            'exp_subtitle'      => 'required|max:85',
            'end_time'          => 'required',
            'category_id'       => 'required|integer',
            'charity_id'        => 'required|integer',
            'featured_image'    => 'required',
            'info_title'        => 'required',
            'benefit_title'     => 'required',
            'legal_title'       => 'required',
            'slug'              => 'required',
        ],
            [
                'category_id.integer' => 'The category field is required',
                'charity_id.integer' => 'The charity field is required',
            ]);

        $experience = new Product();
        $experience->exp_title         = $request->exp_title;
        $experience->exp_subtitle      = $request->exp_subtitle;
        $experience->exp_content       = $request->exp_content;
        $experience->end_time          = $request->end_time;
        $experience->category_id       = $request->category_id;
        $experience->charity_id        = $request->charity_id;
        $experience->info_title        = $request->info_title;
        $experience->info_content      = $request->info_content;
        $experience->benefit_title     = $request->benefit_title;
        $experience->benefit_content   = $request->benefit_content;
        $experience->legal_title       = $request->legal_title;
        $experience->legal_content     = $request->legal_content;
        $experience->slug              = $request->slug;
        $experience->seo_title         = $request->seo_title;
        $experience->seo_slug          = $request->seo_slug;
        $experience->meta_description  = $request->meta_description;
        $experience->meta_keywords     = $request->meta_keywords;
        $experience->status            = 1;

        $benefit_image                  = $request->file('benefit_image');
        $info_image                     = $request->file('info_image');
        $featured_image                 = $request->file('featured_image');
        $gallery_image_1                = $request->file('gallery_image_1');
        $gallery_image_2                = $request->file('gallery_image_2');

        if ($featured_image) {

            $main_image = Str::random(50) . '.' . $featured_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($featured_image)->resize(744, 496)->save(public_path('uploads/experience/' . $main_image));
            $experience->featured_image = 'uploads/experience/' . $main_image;

        }
        if ($gallery_image_1) {

            $gallery_image1 = Str::random(50) . '.' . $gallery_image_1->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_1)->resize(744, 496)->save(public_path('uploads/experience/' . $gallery_image1));
            $experience->gallery_image_1 = 'uploads/experience/' . $gallery_image1;

        }

        if ($gallery_image_2) {

            $gallery_image2 = Str::random(50) . '.' . $gallery_image_2->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_2)->resize(744, 496)->save(public_path('uploads/experience/' . $gallery_image2));
            $experience->gallery_image_2 = 'uploads/experience/' . $gallery_image2;

        }
        if ($benefit_image) {

            $benefit_image1 = Str::random(50) . '.' . $benefit_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($benefit_image)->resize(744, 496)->save(public_path('uploads/experience/' . $benefit_image1));
            $experience->benefit_image = 'uploads/experience/' . $benefit_image1;

        }

        if ($info_image) {

            $info_image1 = Str::random(50) . '.' . $info_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($info_image)->resize(744, 496)->save(public_path('uploads/experience/' . $info_image1));
            $experience->info_image = 'uploads/experience/' . $info_image1;

        }

        $experience->save();
        $notification = array(
            'messege' => 'Experience successfully added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.experience')->with($notification);
    }

    /**
     * Edit existing experience.
     *
     * @param  //id
     * @return //view
     */

    public function edit($id)
    {
        $experience     = Product::findOrFail($id);
        $category       = Category::all();
        $charity        = Charity::all();
        return view('admin.pages.experience.edit-experience', compact('experience', 'category', 'charity'));
    }

    /**
     * Update existing experience.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'exp_title'         => 'required|max:85',
            'exp_subtitle'      => 'required|max:55',
            'end_time'          => 'required',
            'category_id'       => 'required|integer',
            'charity_id'        => 'required',
            'info_title'        => 'required',
            'benefit_title'     => 'required',
            'legal_title'       => 'required',
            'slug'              => 'required',
        ],
            [
                'category_id.integer' => 'The category field is required',
                'charity_id.integer' => 'The charity field is required',
            ]);

        $experience                    = Product::find($id);
        $experience->exp_title         = $request->exp_title;
        $experience->exp_subtitle      = $request->exp_subtitle;
        $experience->exp_content       = $request->exp_content;
        $experience->end_time          = $request->end_time;
        $experience->category_id       = $request->category_id;
        $experience->charity_id        = $request->charity_id;
        $experience->info_title        = $request->info_title;
        $experience->info_content      = $request->info_content;
        $experience->benefit_title     = $request->benefit_title;
        $experience->benefit_content   = $request->benefit_content;
        $experience->legal_title       = $request->legal_title;
        $experience->legal_content     = $request->legal_content;
        $experience->slug              = $request->slug;
        $experience->seo_title         = $request->seo_title;
        $experience->seo_slug          = $request->seo_slug;
        $experience->meta_description  = $request->meta_description;
        $experience->meta_keywords     = $request->meta_keywords;

        //Old Image Link
        $old_benefit_image             = $experience->benefit_image;
        $old_info_image                = $experience->info_image;
        $old_featured_image            = $experience->featured_image;
        $old_gallery_image_1           = $experience->gallery_image_1;
        $old_gallery_image_2           = $experience->gallery_image_2;

        //New Image
        $benefit_image                 = $request->file('benefit_image');
        $info_image                    = $request->file('info_image');
        $featured_image                = $request->file('featured_image');
        $gallery_image_1               = $request->file('gallery_image_1');
        $gallery_image_2               = $request->file('gallery_image_2');

        if ($featured_image) {
            if ($old_featured_image) {
                unlink($old_featured_image);
            }
            $main_image = Str::random(50) . '.' . $featured_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($featured_image)->resize(744, 496)->save(public_path('uploads/experience/' . $main_image));
            $experience->featured_image = 'uploads/experience/' . $main_image;

        }
        if ($gallery_image_1) {

            if ($old_gallery_image_1) {
                unlink($old_gallery_image_1);
            }
            $gallery_image1 = Str::random(50) . '.' . $gallery_image_1->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_1)->resize(744, 496)->save(public_path('uploads/experience/' . $gallery_image1));
            $experience->gallery_image_1 = 'uploads/experience/' . $gallery_image1;

        }

        if ($gallery_image_2) {

            if ($old_gallery_image_1) {
                unlink($old_gallery_image_2);
            }
            $gallery_image2 = Str::random(50) . '.' . $gallery_image_2->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($gallery_image_2)->resize(744, 496)->save(public_path('uploads/experience/' . $gallery_image2));
            $experience->gallery_image_2 = 'uploads/experience/' . $gallery_image2;

        }

        if ($benefit_image) {
            if ($old_benefit_image) {
                unlink($old_benefit_image);
            }
            $benefit_image1 = Str::random(50) . '.' . $benefit_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($benefit_image)->resize(744, 496)->save(public_path('uploads/experience/' . $benefit_image1));
            $experience->benefit_image = 'uploads/experience/' . $benefit_image1;

        }

        if ($info_image) {
            if ($old_info_image) {
                unlink($old_info_image);
            }
            $info_image1 = Str::random(50) . '.' . $info_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($info_image)->resize(744, 496)->save(public_path('uploads/experience/' . $info_image1));
            $experience->info_image = 'uploads/experience/' . $info_image1;

        }

        $experience->save();
        $notification = array(
            'messege' => 'Experience successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.experience')->with($notification);
    }

    /**
     * Delete existing product.
     *
     * @param  //id
     * @return //view
     */
    public function delete($id)
    {
        $experience             = Product::find($id);
        $benefit_image          = $experience->benefit_image;
        $info_image             = $experience->info_image;
        $featured_image         = $experience->featured_image;
        $gallery_image_1        = $experience->gallery_image_1;
        $gallery_image_2        = $experience->gallery_image_2;
        if ($featured_image) {
            unlink($featured_image);
        }
        if ($gallery_image_1) {
            unlink($gallery_image_1);
        }
        if ($gallery_image_2) {
            unlink($gallery_image_2);
        }
        if ($benefit_image) {
            unlink($benefit_image);
        }
        if ($info_image) {
            unlink($info_image);
        }

        $experience->forceDelete();
        $notification = array(
            'messege' => 'Experience successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.experience')->with($notification);
    }

    /**
     * Active existing Product.
     *
     * @param  //id
     * @return //active
     */
    public function Active($id)
    {
        $experience = Product::find($id);
        $experience->status = 1;
        $experience->save();
        $notification = array(
            'messege' => 'Experience successfully activated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Inactive existing Product.
     *
     * @param  //id
     * @return //active
     */
    public function Inactive($id)
    {
        $experience = Product::find($id);
        $experience->status = 0;
        $experience->save();
        $notification = array(
            'messege' => 'Experience successfully deactivated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
