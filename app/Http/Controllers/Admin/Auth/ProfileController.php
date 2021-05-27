<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class ProfileController extends Controller
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
     * Edit existing profile data.
     *
     * @param  //id
     * @return //view
     */

    public function edit()
    {
        $user = Profile::where('admin_id', Auth::id())->first();
        return view('admin.auth.your-profile', compact('user'));
    }

    /**
     * Update new profile data.
     *
     * @param  //id
     * @return //view
     */

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $id = Auth::id();
        $user                           = User::find($id);
        $user->name                     = $request->name;
        $user->email                    = $request->email;
        $user->save();

        $profile                        = Profile::where('admin_id', $id)->first();
        $profile->phone                 = $request->phone;
        $profile->address_1             = $request->address_1;
        $profile->address_2             = $request->address_2;
        $profile->city                  = $request->city;
        $profile->zip                   = $request->zip;
        $profile->state                 = $request->state;
        $profile->country               = $request->country;
        $profile_image                  = $request->file('avatar');

        //Old Image Link
        $old_profile_image              = $request->old_avatar;

        if ($profile_image) {
            if ($old_profile_image) {
                unlink($old_profile_image);
            }
            $profile_image1           = Str::random(50) . '.' . $profile_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($profile_image)->resize(300, 300)->save(public_path('uploads/users/' . $profile_image1));
            $profile->avatar            = 'uploads/users/' . $profile_image1;
        }
        $profile->save();
        $notification = array(
            'messege' => 'Profile successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
