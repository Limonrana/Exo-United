<?php

namespace App\Http\Controllers\Admin\Experience;

use App\Http\Controllers\Controller;
use App\Models\Admin\Charity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class CharityController extends Controller
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
     * Show the application charity.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $charity = Charity::paginate(8);
        return view('admin.pages.charity.charity', compact('charity'));
    }

    /**
     * Store a new charity.
     *
     * @param  //Request  $request
     * @return //Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'charity_name' => 'required|unique:charities|max:55',
        ]);

        $charity = new Charity();
        $charity->charity_name = $request->charity_name;
        $charity_logo = $request->file('charity_logo');
        if ($charity_logo)
        {
            $main_image = Str::random(50) . '.' . $charity_logo->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($charity_logo)->resize(300, 105)->save(public_path('uploads/charity/' . $main_image));
            $charity->charity_logo = 'uploads/charity/' . $main_image;

            $charity->save();
            $notification=array(
                'messege'=>'Charity successfully added.',
                'alert-type'=>'success'
            );
            return redirect()->route('admin.charity')->with($notification);
        }
        else
        {
            $charity->save();
            $notification=array(
                'messege'=>'Charity successfully added.',
                'alert-type'=>'success'
            );
            return redirect()->route('admin.charity')->with($notification);
        }
    }

    /**
     * Edit existing charity.
     *
     * @param  //id
     * @return //view
     */

    public function edit($id)
    {
        $charity = Charity::findOrFail($id);
        return view('admin.pages.charity.edit-charity', compact('charity'));
    }

    /**
     * Edit existing charity.
     *
     * @param  //id
     * @return //view
     */
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'charity_name' => 'required|max:55',
        ]);
        $charity_old_logo = $request->old_logo;
        $charity = Charity::find($id);
        $charity->charity_name = $request->charity_name;
        $charity_logo = $request->file('charity_logo');
        if ($charity_logo)
        {
            if ($charity_old_logo) {
                unlink($charity_old_logo);
            }
            $main_image = Str::random(20) . '.' . $charity_logo->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($charity_logo)->resize(300, 175)->save(public_path('uploads/charity/' . $main_image));
            $charity->charity_logo = 'uploads/charity/' . $main_image;
            $charity->save();
            $notification=array(
                'messege'=>'Charity successfully updated',
                'alert-type'=>'success'
            );
            return redirect()->route('admin.charity')->with($notification);
        }
        else
        {
            $charity->save();
            $notification=array(
                'messege'=>'Charity successfully updated',
                'alert-type'=>'success'
            );
            return redirect()->route('admin.charity')->with($notification);
        }
    }

    /**
     * Delete existing charity.
     *
     * @param  //id
     * @return //view
     */
    public function delete($id)
    {
        $charity = Charity::find($id);
        $charity_logo = $charity->charity_logo;
        if ($charity_logo) {
            unlink($charity_logo);
        }
        $charity->forceDelete();
        $notification=array(
            'messege'=>'Charity successfully deleted.',
            'alert-type'=>'error'
        );
        return redirect()->route('admin.charity')->with($notification);
    }
}
