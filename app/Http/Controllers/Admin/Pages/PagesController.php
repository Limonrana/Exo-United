<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Contact;
use App\Models\Admin\Home;
use App\Models\Admin\Homenext;
use App\Models\Admin\Icon;
use App\Models\Admin\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class PagesController extends Controller
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
     * Show the application homepage panel form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function Homepage()
    {
        $get_1  = Home::where('id', 1)->first();
        $get_2  = Homenext::where('id', 1)->first();
        return view('admin.pages.pages.home', compact('get_1','get_2'));
    }

    /**
     * Update Offer data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function OfferUpdate(Request $request, $id)
    {

        $home                           = Home::find($id);
        $home->offer_title              = $request->offer_title;
        $home->offer_content            = $request->offer_content;
        $home->offer_heading_1          = $request->offer_heading_1;
        $home->offer_subheading_1       = $request->offer_subheading_1;
        $home->offer_button_text_1      = $request->offer_button_text_1;
        $home->offer_button_link_1      = $request->offer_button_link_1;
        $home->offer_heading_2          = $request->offer_heading_2;
        $home->offer_subheading_2       = $request->offer_subheading_2;
        $home->offer_button_text_2      = $request->offer_button_text_2;
        $home->offer_button_link_2      = $request->offer_button_link_2;
        $home->offer_heading_3          = $request->offer_heading_3;
        $home->offer_subheading_3       = $request->offer_subheading_3;
        $home->offer_button_text_3      = $request->offer_button_text_3;
        $home->offer_button_link_3      = $request->offer_button_link_3;
        $home->featured_exp_title       = $request->featured_exp_title;
        $home->featured_exp_subtitle    = $request->featured_exp_subtitle;
        $home->featured_exp_display     = $request->featured_exp_display;
        $home->exo_exp_title            = $request->exo_exp_title;
        $home->exo_exp_subtitle         = $request->exo_exp_subtitle;
        $home->exo_exp_display          = $request->exo_exp_display;
        $home->last_exp_title           = $request->last_exp_title;
        $home->last_exp_subtitle        = $request->last_exp_subtitle;
        $home->last_exp_display         = $request->last_exp_display;

        //old image
        $old_offer_image_1              = $home->offer_image_1;
        $old_offer_image_2              = $home->offer_image_2;
        $old_offer_image_3              = $home->offer_image_3;
        //new image
        $offer_image_1                  = $request->file('offer_image_1');
        $offer_image_2                  = $request->file('offer_image_2');
        $offer_image_3                  = $request->file('offer_image_3');

        if ($offer_image_1) {

            if ($old_offer_image_1) {
                unlink($old_offer_image_1);
            }
            $offer_image1 = Str::random(50) . '.' . $offer_image_1->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($offer_image_1)->resize(150, 150)->save(public_path('uploads/others/' . $offer_image1));
            $home->offer_image_1 = 'uploads/others/' . $offer_image1;
        }

        if ($offer_image_2) {

            if ($old_offer_image_2) {
                unlink($old_offer_image_2);
            }
            $offer_image2 = Str::random(50) . '.' . $offer_image_2->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($offer_image_2)->resize(150, 150)->save(public_path('uploads/others/' . $offer_image2));
            $home->offer_image_2 = 'uploads/others/' . $offer_image2;
        }

        if ($offer_image_3) {

            if ($old_offer_image_3) {
                unlink($old_offer_image_3);
            }
            $offer_image3 = Str::random(50) . '.' . $offer_image_3->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($offer_image_3)->resize(150, 150)->save(public_path('uploads/others/' . $offer_image3));
            $home->offer_image_3 = 'uploads/others/' . $offer_image3;
        }

        $home->save();
        $notification = array(
            'messege' => 'Offer data successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Update Offer data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function ExpUpdate(Request $request, $id)
    {

        $home                                   = Home::find($id);
        $home->featured_exp_title               = $request->featured_exp_title;
        $home->featured_exp_subtitle            = $request->featured_exp_subtitle;
        $home->featured_exp_display             = $request->featured_exp_display;
        $home->exo_exp_title                    = $request->exo_exp_title;
        $home->exo_exp_subtitle                 = $request->exo_exp_subtitle;
        $home->exo_exp_display                  = $request->exo_exp_display;
        $home->last_exp_title                   = $request->last_exp_title;
        $home->last_exp_subtitle                = $request->last_exp_subtitle;
        $home->last_exp_display                 = $request->last_exp_display;
        $home->save();
        $notification = array(
            'messege' => 'Experience data successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }


    /**
     * Update Why Us data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function WhyUpdate(Request $request, $id)
    {

        $why                           = Homenext::find($id);
        $why->choose_us_title          = $request->choose_us_title;
        $why->choose_us_subtitle       = $request->choose_us_subtitle;
        $why->choose_title_1           = $request->choose_title_1;
        $why->choose_title_2           = $request->choose_title_2;
        $why->choose_title_3           = $request->choose_title_3;
        $why->choose_title_4           = $request->choose_title_4;
        $why->choose_title_5           = $request->choose_title_5;
        $why->choose_title_6           = $request->choose_title_6;
        $why->choose_content_1         = $request->choose_content_1;
        $why->choose_content_2         = $request->choose_content_2;
        $why->choose_content_3         = $request->choose_content_3;
        $why->choose_content_4         = $request->choose_content_4;
        $why->choose_content_5         = $request->choose_content_5;
        $why->choose_content_6         = $request->choose_content_6;
        $why->choose_icon_1            = $request->choose_icon_1;
        $why->choose_icon_2            = $request->choose_icon_2;
        $why->choose_icon_3            = $request->choose_icon_3;
        $why->choose_icon_4            = $request->choose_icon_4;
        $why->choose_icon_5            = $request->choose_icon_5;
        $why->choose_icon_6            = $request->choose_icon_6;

        //old image
        $old_why_us_bg                 = $why->choose_us_bg;
        //new image
        $why_us_bg                     = $request->file('choose_us_bg');

        if ($why_us_bg) {

            if ($old_why_us_bg) {
                unlink($old_why_us_bg);
            }
            $why_us_bg1 = Str::random(50) . '.' . $why_us_bg->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($why_us_bg)->resize(660, 560)->save(public_path('uploads/others/' . $why_us_bg1));
            $why->choose_us_bg  = 'uploads/others/' . $why_us_bg1;
        }
        $why->save();
        $notification = array(
            'messege' => 'Why Us data successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Update Work step data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function WorkUpdate(Request $request, $id)
    {

        $work                               = Homenext::find($id);
        $work->work_step_title              = $request->work_step_title;
        $work->work_step_subtitle           = $request->work_step_subtitle;
        $work->work_step_heading_1          = $request->work_step_heading_1;
        $work->work_step_heading_2          = $request->work_step_heading_2;
        $work->work_step_heading_3          = $request->work_step_heading_3;
        $work->work_step_subheading_1       = $request->work_step_subheading_1;
        $work->work_step_subheading_2       = $request->work_step_subheading_2;
        $work->work_step_subheading_3       = $request->work_step_subheading_3;
        $work->work_step_icon_1             = $request->work_step_icon_1;
        $work->work_step_icon_2             = $request->work_step_icon_2;
        $work->work_step_icon_3             = $request->work_step_icon_3;
        $work->work_step_video_link         = $request->work_step_video_link;

        //old image
        $old_work_step_bg                   = $request->file('old_work_step_bg');
        //new image
        $work_step_bg                          = $request->file('work_step_bg');

        if ($work_step_bg) {

            if ($old_work_step_bg) {
                unlink($old_work_step_bg);
            }
            $work_step_bg1 = Str::random(50) . '.' . $work_step_bg->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($work_step_bg)->save(public_path('uploads/others/' . $work_step_bg1));
            $work->work_step_bg  = 'uploads/others/' . $work_step_bg1;
        }

        $work->save();
        $notification = array(
            'messege' => 'Work step successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }


    /**
     * Update Winner & Users step data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function WinnerUpdate(Request $request, $id)
    {

        $winner                               = Homenext::find($id);
        $winner->winner_sec_title             = $request->winner_sec_title;
        $winner->winner_sec_subtitle          = $request->winner_sec_subtitle;
        $winner->winner_sec_btn_text          = $request->winner_sec_btn_text;
        $winner->winner_display               = $request->winner_display;
        $winner->user_sec_title               = $request->user_sec_title;
        $winner->user_sec_subtitle            = $request->user_sec_subtitle;
        $winner->countdown_title_1            = $request->countdown_title_1;
        $winner->countdown_title_2            = $request->countdown_title_2;
        $winner->countdown_title_3            = $request->countdown_title_3;
        $winner->countdown_title_4            = $request->countdown_title_4;
        $winner->countdown_value_1            = $request->countdown_value_1;
        $winner->countdown_value_2            = $request->countdown_value_2;
        $winner->countdown_value_3            = $request->countdown_value_3;
        $winner->countdown_value_4            = $request->countdown_value_4;
        $winner->user_sec_btn_text            = $request->user_sec_btn_text;

        $winner->save();
        $notification = array(
            'messege' => 'Winner & Users successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }


    /**
     * Show the application privacy panel form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function privacy()
    {
        $get = Page::where('id', 1)->first();
        return view('admin.pages.pages.privacy', compact('get'));
    }

    /**
     * Update privacy data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function privacyupdate($id, Request $request)
    {
        $validatedData = $request->validate([
            'page_title' => 'required|max:55',
            'page_content' => 'required',
        ]);

        $page                           = Page::find($id);
        $page->page_title               = $request->page_title;
        $page->page_content             = $request->page_content;

        $page->save();
        $notification = array(
            'messege' => 'Privacy content successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application roles panel form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function roles()
    {
        $get = Page::where('id', 3)->first();
        return view('admin.pages.pages.roles', compact('get'));
    }

    /**
     * Update privacy data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function rolesupdate($id, Request $request)
    {
        $validatedData = $request->validate([
            'page_title' => 'required|max:55',
            'page_content' => 'required',
        ]);

        $page                           = Page::find($id);
        $page->page_title               = $request->page_title;
        $page->page_content             = $request->page_content;

        $page->save();
        $notification = array(
            'messege' => 'Roles content successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application Terms & Conditions panel form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function terms()
    {
        $get = Page::where('id', 2)->first();
        return view('admin.pages.pages.terms', compact('get'));
    }

    /**
     * Update Terms & Conditions data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function termsupdate($id, Request $request)
    {
        $validatedData = $request->validate([
            'page_title' => 'required|max:55',
            'page_content' => 'required',
        ]);

        $page                           = Page::find($id);
        $page->page_title               = $request->page_title;
        $page->page_content             = $request->page_content;

        $page->save();
        $notification = array(
            'messege' => 'Terms & Conditions successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application contact panel form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function Contact()
    {
        $get = Contact::where('id', 1)->first();
        return view('admin.pages.pages.contact', compact('get'));
    }

    /**
     * Update contact data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function ContactUpdate($id, Request $request)
    {

        $contact                            = Contact::find($id);
        $contact->left_title                = $request->left_title;
        $contact->left_content              = $request->left_content;
        $contact->notification_email        = $request->notification_email;
        $contact->right_title               = $request->right_title;
        $contact->right_content             = $request->right_content;
        $contact->right_details_title       = $request->right_details_title;
        $contact->right_phone_1             = $request->right_phone_1;
        $contact->right_phone_2             = $request->right_phone_2;
        $contact->right_email_1             = $request->right_email_1;
        $contact->right_email_2             = $request->right_email_2;
        $contact->map_latitude              = $request->map_latitude;
        $contact->map_longitude             = $request->map_longitude;

        //Old BG Image
        $old_right_bg_image                 = $contact->right_bg_image;

        //New BG Image
        $right_bg_image                     = $request->file('right_bg_image');
        if ($right_bg_image) {

            if ($old_right_bg_image) {
                unlink($old_right_bg_image);
            }
            $right_bg_image1 = Str::random(50) . '.' . $right_bg_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($right_bg_image)->save(public_path('uploads/others/' . $right_bg_image1));
            $contact->right_bg_image = 'uploads/others/' . $right_bg_image1;
        }

        $contact->save();
        $notification = array(
            'messege' => 'Contact info successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    /**
     * Show the application contact panel form.
     *
     * @return //\Illuminate\Contracts\Support\Renderable
     */

    public function About()
    {
        $get = About::where('id', 1)->first();
        return view('admin.pages.pages.about', compact('get'));
    }

    /**
     * Update contact data.
     *
     * @param  //id, //Request  $request
     * @return //Response
     */

    public function AboutUpdate($id, Request $request)
    {

        $about                              = About::find($id);
        $about->about_sec_title             = $request->about_sec_title;
        $about->about_sec_content           = $request->about_sec_content;
        $about->about_details_content       = $request->about_details_content;
        $about->service_icon_1              = $request->service_icon_1;
        $about->service_title_1             = $request->service_title_1;
        $about->service_content_1           = $request->service_content_1;
        $about->service_link_1              = $request->service_link_1;
        $about->service_icon_2              = $request->service_icon_2;
        $about->service_title_2             = $request->service_title_2;
        $about->service_content_2           = $request->service_content_2;
        $about->service_link_2              = $request->service_link_2;
        $about->service_icon_3              = $request->service_icon_3;
        $about->service_title_3             = $request->service_title_3;
        $about->service_content_3           = $request->service_content_3;
        $about->service_link_3              = $request->service_link_3;
        $about->quote_title_1               = $request->quote_title_1;
        $about->quote_content_1             = $request->quote_content_1;
        $about->quote_charity_1             = $request->quote_charity_1;
        $about->quote_title_2               = $request->quote_title_2;
        $about->quote_content_2             = $request->quote_content_2;
        $about->quote_charity_2             = $request->quote_charity_2;
        $about->quote_title_3               = $request->quote_title_3;
        $about->quote_content_3             = $request->quote_content_3;
        $about->quote_charity_3             = $request->quote_charity_3;

        //Old BG Image
        $old_about_sec_image                = $about->about_sec_image;

        //New BG Image
        $about_sec_image                    = $request->file('about_sec_image');
        if ($about_sec_image) {

            if ($old_about_sec_image) {
                unlink($old_about_sec_image);
            }
            $about_sec_image1 = Str::random(50) . '.' . $about_sec_image->getClientOriginalExtension();
            // resizing an uploaded file
            Image::make($about_sec_image)->save(public_path('uploads/others/' . $about_sec_image1));
            $about->about_sec_image = 'uploads/others/' . $about_sec_image1;
        }

        $about->save();
        $notification = array(
            'messege' => 'About info successfully updated',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
