<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exp_title', 'exp_subtitle', 'exp_content', 'category_id', 'charity_id', 'featured_image', 'gallery_image_1', 'gallery_image_2',
        'info_title', 'info_content', 'benefit_title', 'benefit_content', 'legal_title', 'legal_content', 'slug', 'seo_title', 'seo_slug',
        'meta_description', 'meta_keywords', 'status', 'end_time',
    ];

    /**
     * This Model relationship with Category Model.
     *
     * @function belongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Category', 'category_id');
    }

    /**
     * This Model relationship with Charity Model.
     *
     * @function belongsTo
     */
    public function charity()
    {
        return $this->belongsTo('App\Models\Admin\Charity', 'charity_id');
    }

    /**
     * This Model relationship with Entry Level Model.
     *
     * @function belongsTo
     */
    public function entry()
    {
        return $this->hasMany(Entrylevel::class);
    }
}
