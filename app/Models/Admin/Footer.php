<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footer_logo', 'footer_logo_size', 'footer_right_text_1', 'footer_right_number_1', 'footer_right_text_2', 'footer_right_number_2', 'newsletter_heading', 'newsletter_subheading',
        'copyright_text', 'social_icon_1', 'social_icon_link_1', 'social_icon_2', 'social_icon_link_2', 'social_icon_3', 'social_icon_link_3', 'social_icon_4', 'social_icon_link_4'
    ];
}
