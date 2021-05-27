<?php

namespace App\Http\Controllers\Admin\Experience;

use App\Http\Controllers\Controller;
use App\Models\Admin\Entrylevel;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class EntryController extends Controller
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
        $entry = Entrylevel::paginate(10);
        return view('admin.pages.entry.all-entry', compact('entry'));
    }

    /**
     * Show the application add entry form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $experience = Product::all();
        return view('admin.pages.entry.add-new', compact('experience'));
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
            'experience_id' => 'required|integer',
            'entry_title' => 'required',
            'entry_price' => 'required',
            'entry_number' => 'required',
            'entry_description' => 'required',
            'entry_image' => 'required',
        ],
            [
                'experience_id.integer' => 'The experience field is required',
            ]);

        $entry                      = new Entrylevel();
        $entry->experience_id       = $request->experience_id;
        $entry->entry_title         = $request->entry_title;
        $entry->entry_quantity      = $request->entry_number;
        $entry->entry_description   = $request->entry_description;
        $entry->entry_price         = $request->entry_price;
        $entry->recommend_badge     = $request->recommend_badge;
        $entry->status              = 1;
        $entry_image                = $request->file('entry_image');

        if ($entry_image) {
            $entry_image1           = Str::random(50) . '.' . $entry_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($entry_image)->resize(600, 450)->save(public_path('uploads/experience/' . $entry_image1));
            $entry->entry_image     = 'uploads/experience/' . $entry_image1;
        }
        $entry->save();
        $notification = array(
            'messege' => 'Entry successfully added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.entry')->with($notification);
    }

    /**
     * Edit existing entry.
     *
     * @param  //id
     * @return //view
     */

    public function edit($id)
    {
        $entry      = Entrylevel::findOrFail($id);
        $experience = Product::all();
        return view('admin.pages.entry.edit-entry', compact('entry', 'experience'));
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
            'experience_id' => 'required|integer',
            'entry_title' => 'required',
            'entry_price' => 'required',
            'entry_number' => 'required',
            'entry_description' => 'required',
            'entry_image' => 'required',
        ],
            [
                'experience_id.integer' => 'The experience field is required',
            ]);

        $entry                      = Entrylevel::find($id);
        $entry->experience_id       = $request->experience_id;
        $entry->entry_title         = $request->entry_title;
        $entry->entry_quantity      = $request->entry_number;
        $entry->entry_description   = $request->entry_description;
        $entry->entry_price         = $request->entry_price;
        $entry->recommend_badge     = $request->recommend_badge;
        $entry->status              = 1;
        $entry_image                = $request->file('entry_image');

        //Old Image Link
        $old_entry_image            = $entry->entry_image;

        if ($entry_image) {
            if ($old_entry_image) {
                unlink($old_entry_image);
            }
            $entry_image1           = Str::random(50) . '.' . $entry_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($entry_image)->resize(600, 450)->save(public_path('uploads/experience/' . $entry_image1));
            $entry->entry_image     = 'uploads/experience/' . $entry_image1;
        }
        $entry->save();
        $notification = array(
            'messege' => 'Entry successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.entry')->with($notification);
    }

    /**
     * Delete existing entry.
     *
     * @param  //id
     * @return //view
     */
    public function delete($id)
    {
        $entry              = Entrylevel::find($id);
        $entry_image        = $entry->entry_image;
        if ($entry_image) {
            unlink($entry_image);
        }
        $entry->forceDelete();
        $notification = array(
            'messege' => 'Entry successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.entry')->with($notification);
    }

    /**
     * Active existing entry.
     *
     * @param  //id
     * @return //active
     */
    public function Active($id)
    {
        $entry = Entrylevel::find($id);
        $entry->status = 1;
        $entry->save();
        $notification = array(
            'messege' => 'Entry successfully activated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Inactive existing entry.
     *
     * @param  //id
     * @return //active
     */
    public function Inactive($id)
    {
        $entry = Entrylevel::find($id);
        $entry->status = 0;
        $entry->save();
        $notification = array(
            'messege' => 'Entry successfully deactivated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
