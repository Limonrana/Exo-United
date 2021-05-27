<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Profile;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Image;
use phpDocumentor\Reflection\Types\Null_;

class AdminManageController extends Controller
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
     * Show the application admin.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $admin = Admin::where('is_super', 1)->paginate(10);
        return view('admin.pages.user.all-admin', compact('admin'));
    }

    /**
     * Show the application add new admin.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */
    public function showAdminForm()
    {
        return view('admin.pages.user.add-new-admin');
    }

    /**
     * Store a new admin.
     *
     * @param  //Request  $request
     * @return //Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:85',
            'email' => 'required|unique:admins|max:55',
            'password' => 'required',
        ]);

        $admin              = new Admin();
        $admin->name        = $request->name;
        $admin->email       = $request->email;
        $admin->password    = Hash::make($request->password);
        $admin->is_super    = 1;
        $admin->save();

        $profile            = new Profile();
        $profile->admin_id  = $admin->id;
        $avatar             = $request->file('avatar');
        if ($avatar) {

            $main_image = Str::random(50) . '.' . $avatar->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/users/' . $main_image));
            $profile->avatar  = 'uploads/users/' . $main_image;
        }
        $profile->save();

        $role = new Role();
        $role->admin_id         = $admin->id;
        $role->posts            = $request->posts;
        $role->pages            = $request->pages;
        $role->winners          = $request->winners;
        $role->coupons          = $request->coupons;
        $role->ecommerce        = $request->ecommerce;
        $role->experience       = $request->experience;
        $role->orders           = $request->orders;
        $role->entry            = $request->entry;
        $role->drawn            = $request->drawn;
        $role->theme_panel      = $request->theme_panel;
        $role->users            = $request->users;
        $role->settings         = $request->settings;
        $role->create_admin     = $request->create_admin;
        $role->save();
        $notification = array(
            'messege' => 'Admin successfully added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.user')->with($notification);
    }

    /**
     * Edit existing product.
     *
     * @param  //id
     * @return //view
     */

    public function edit($id)
    {
        $admin = Admin::where('is_super', 1)->findOrFail($id);
        $profile = Profile::where('admin_id', $id)->first();
        return view('admin.pages.user.edit-admin', compact('admin', 'profile'));
    }

    /**
     * Update existing product.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */
    public function update($id, $role_id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:85',
            'email' => 'required|max:55',
        ]);

        $admin                  = Admin::find($id);
        $admin->name            = $request->name;
        $admin->email           = $request->email;
        if ($request->password){
            $admin->password    = Hash::make($request->password);
        }
        $admin->is_super        = 1;
        $admin->save();

        $profile                = Profile::where('admin_id', $id)->first();
        $avatar_old             = $request->old_avatar;
        $avatar                 = $request->file('avatar');
        if ($avatar) {
            if ($avatar_old) {
                unlink($avatar_old);
            }
            $main_image = Str::random(50) . '.' . $avatar->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($avatar)->resize(300, 300)->save(public_path('uploads/users/' . $main_image));
            $profile->avatar  = 'uploads/users/' . $main_image;
        }
        $profile->save();

        $role                   = Role::find($role_id);
        $role->posts            = $request->posts;
        $role->pages            = $request->pages;
        $role->winners          = $request->winners;
        $role->coupons          = $request->coupons;
        $role->ecommerce        = $request->ecommerce;
        $role->experience       = $request->experience;
        $role->orders           = $request->orders;
        $role->entry            = $request->entry;
        $role->drawn            = $request->drawn;
        $role->theme_panel      = $request->theme_panel;
        $role->users            = $request->users;
        $role->settings         = $request->settings;
        $role->create_admin     = $request->create_admin;
        $role->save();
        $notification = array(
            'messege' => 'Admin successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.user')->with($notification);
    }

    /**
     * Delete existing product.
     *
     * @param  //id
     * @return //view
     */
    public function delete($id, $role_id)
    {
        $admin = Admin::find($id);
        $role  = Role::find($role_id);

        $admin->forceDelete();
        $role->forceDelete();
        $notification = array(
            'messege' => 'Admin successfully deleted',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.user')->with($notification);
    }
}
