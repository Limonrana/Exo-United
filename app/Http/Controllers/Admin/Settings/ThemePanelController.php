<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\Category;
use App\Models\Admin\Footer;
use App\Models\Admin\Header;
use App\Models\Admin\Menu;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ThemePanelController extends Controller
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
     * Show the application header form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function HeaderShow()
    {
        $get = Header::where('id', 1)->first();
        return view('admin.pages.theme-panel.header.header', compact('get'));
    }

    /**
     * Update header data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function HeaderUpdate(Request $request, $id)
    {

        $header                         = Header::find($id);
        $header->logo_size              = $request->logo_size;
        $header->email                  = $request->email;
        $header->phone                  = $request->phone;

        //Old Image Link
        $old_logo                       = $request->old_logo;

        //New Image
        $logo                           = $request->file('logo');

        if ($logo) {
            if ($old_logo){
                unlink($old_logo);
            }
            $main_image = Str::random(50) . '.' . $logo->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($logo)->save(public_path('uploads/others/' . $main_image));
            $header->logo = 'uploads/others/' . $main_image;

        }

        $header->save();
        $notification = array(
            'messege' => 'Header successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }


    /**
     * Show the application footer form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function FooterShow()
    {
        $get = Footer::where('id', 1)->first();
        return view('admin.pages.theme-panel.footer.footer', compact('get'));
    }

    /**
     * Update footer data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function FooterUpdate(Request $request, $id)
    {

        $footer                             = Footer::find($id);
        $footer->footer_logo_size           = $request->footer_logo_size;
        $footer->footer_right_text_1        = $request->footer_right_text_1;
        $footer->footer_right_number_1      = $request->footer_right_number_1;
        $footer->footer_right_text_2        = $request->footer_right_text_2;
        $footer->footer_right_number_2      = $request->footer_right_number_2;
        $footer->newsletter_heading         = $request->newsletter_heading;
        $footer->newsletter_subheading      = $request->newsletter_subheading;
        $footer->social_icon_1              = $request->social_icon_1;
        $footer->social_icon_link_1         = $request->social_icon_link_1;
        $footer->social_icon_2              = $request->social_icon_2;
        $footer->social_icon_link_2         = $request->social_icon_link_2;
        $footer->social_icon_3              = $request->social_icon_3;
        $footer->social_icon_link_3         = $request->social_icon_link_3;
        $footer->social_icon_4              = $request->social_icon_4;
        $footer->social_icon_link_4         = $request->social_icon_link_4;
        $footer->copyright_text             = $request->copyright_text;
        //Old Image Link
        $old_footer_logo                    = $request->old_footer_logo;

        //New Image
        $footer_logo                        = $request->file('footer_logo');

        if ($footer_logo) {
            if ($old_footer_logo) {
                unlink($old_footer_logo);
            }
            $new_footer_logo = Str::random(50) . '.' . $footer_logo->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($footer_logo)->save(public_path('uploads/others/' . $new_footer_logo));
            $footer->footer_logo = 'uploads/others/' . $new_footer_logo;

        }

        $footer->save();
        $notification = array(
            'messege' => 'Footer successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application all banner.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $banner = Banner::paginate(10);
        return view('admin.pages.theme-panel.banner.all-banner', compact('banner'));
    }

    /**
     * Show the application banner form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function BannerForm()
    {
        return view('admin.pages.theme-panel.banner.add-new');
    }



    /**
     * Store Slider data.
     *
     * @param //Request  $request
     * @return //Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'banner_heading'    => 'required',
            'banner_subheading' => 'required',
            'button_text'       => 'required',
            'button_link'       => 'required',
            'bg_image'          => 'required',
        ]);

        $banner                         = new Banner();
        $banner->banner_heading         = $request->banner_heading;
        $banner->banner_subheading      = $request->banner_subheading;
        $banner->button_text            = $request->button_text;
        $banner->button_link            = $request->button_link;
        $banner->is_bg_main             = $request->is_bg_main;
        $banner->status                 = 0;
        $bg_image                       = $request->file('bg_image');

        if ($bg_image) {
            $bg_image1           = Str::random(50) . '.' . $bg_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($bg_image)->save(public_path('uploads/others/' . $bg_image1));
            $banner->bg_image     = 'uploads/others/' . $bg_image1;
        }
        $banner->save();
        $notification = array(
            'messege' => 'Banner successfully added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.theme.banner')->with($notification);
    }

    /**
     * Edit existing Slider.
     *
     * @param  //id
     * @return //view
     */

    public function edit($id)
    {
        $banner      = Banner::findOrFail($id);
        return view('admin.pages.theme-panel.banner.edit-banner', compact('banner'));
    }

    /**
     * Update existing slider.
     *
     * @param  //id
     * @return //view
     */

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'banner_heading'    => 'required',
            'banner_subheading' => 'required',
            'button_text'       => 'required',
            'button_link'       => 'required',
        ]);

        $banner                         = Banner::find($id);
        $banner->banner_heading         = $request->banner_heading;
        $banner->banner_subheading      = $request->banner_subheading;
        $banner->button_text            = $request->button_text;
        $banner->button_link            = $request->button_link;
        $banner->is_bg_main             = $request->is_bg_main;
        $bg_image                       = $request->file('bg_image');

        //Old Image Link
        $old_bg_image                   = $banner->bg_image;

        if ($bg_image) {
            if ($old_bg_image) {
                unlink($old_bg_image);
            }
            $bg_image1           = Str::random(50) . '.' . $bg_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($bg_image)->save(public_path('uploads/experience/' . $bg_image1));
            $banner->bg_image     = 'uploads/experience/' . $bg_image1;
        }
        $banner->save();
        $notification = array(
            'messege' => 'Banner successfully updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.theme.banner')->with($notification);
    }


    /**
     * Delete existing banner.
     *
     * @param  //id
     * @return //view
     */

    public function delete($id)
    {
        $banner                 = Banner::find($id);
        $bg_image               = $banner->bg_image;
        if ($bg_image) {
            unlink($bg_image);
        }
        $banner->forceDelete();
        $notification = array(
            'messege' => 'Banner successfully deleted',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Active existing banner.
     *
     * @param  //id
     * @return //view
     */

    public function active($id)
    {
        $banner = Banner::find($id);
        $all_banner = Banner::where('status', 1)->get();
        if ($all_banner) {
            foreach ($all_banner as $val) {
                $new_banner = Banner::find($val->id);
                $new_banner->status = 0;
                $new_banner->save();
            }
        }
        $banner->status = 1;
        $banner->save();
        $notification = array(
            'messege' => 'Banner successfully Activated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * DEACTIVATE existing banner.
     *
     * @param  //id
     * @return //view
     */

    public function deactivate($id)
    {
        $banner = Banner::find($id);
        $banner->status = 0;
        $banner->save();
        $notification = array(
            'messege' => 'Banner successfully Deactivate',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application menu list.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function menu()
    {
        $get = Menu::where('id', 1)->first();
        return view('admin.pages.theme-panel.menu.all-menu', compact('get'));
    }

    /**
     * Update header menu data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function HeaderMenu(Request $request, $id)
    {
        $h_menu                     = Menu::find($id);
        $h_menu->h_menu_1           = $request->h_menu_1;
        $h_menu->h_menu_2           = $request->h_menu_2;
        $h_menu->h_menu_3           = $request->h_menu_3;
        $h_menu->h_menu_4           = $request->h_menu_4;
        $h_menu->h_menu_5           = $request->h_menu_5;
        $h_menu->h_menu_6           = $request->h_menu_6;
        $h_menu->h_menu_7           = $request->h_menu_7;
        $h_menu->h_menu_8           = $request->h_menu_8;
        $h_menu->h_menu_9           = $request->h_menu_9;
        $h_menu->save();
        $notification = array(
            'messege' => 'Header menu successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Update footer menu data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function FooterMenu(Request $request, $id)
    {

        $f_menu                     = Menu::find($id);
        $f_menu->f_menu_1           = $request->f_menu_1;
        $f_menu->f_menu_2           = $request->f_menu_2;
        $f_menu->f_menu_3           = $request->f_menu_3;
        $f_menu->f_menu_4           = $request->f_menu_4;
        $f_menu->f_menu_5           = $request->f_menu_5;
        $f_menu->f_menu_6           = $request->f_menu_6;
        $f_menu->f_menu_7           = $request->f_menu_7;
        $f_menu->f_menu_8           = $request->f_menu_8;
        $f_menu->f_menu_9           = $request->f_menu_9;
        $f_menu->f_menu_10          = $request->f_menu_10;
        $f_menu->save();
        $notification = array(
            'messege' => 'Footer menu successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application menu link.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function menuLink()
    {
        $get = Menu::where('id', 1)->first();
        $category = Category::all();
        return view('admin.pages.theme-panel.menu.menu-link', compact('get', 'category'));
    }


    /**
     * Update Header Category menu link.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function MenuLinkUpdate(Request $request, $id)
    {
        $f_menu                     = Menu::find($id);
        $f_menu->h_menu_1_link      = $request->h_menu_1_link;
        $f_menu->h_menu_2_link      = $request->h_menu_2_link;
        $f_menu->h_menu_3_link      = $request->h_menu_3_link;
        $f_menu->h_menu_4_link      = $request->h_menu_4_link;
        $f_menu->save();
        $notification = array(
            'messege' => 'Menu link successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

}
