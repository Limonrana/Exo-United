<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'banner_heading', 'banner_subheading', 'button_text', 'button_link', 'bg_image', 'is_bg_main', 'status'
    ];
}
