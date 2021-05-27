<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Entrylevel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entry_title', 'entry_number', 'entry_description', 'entry_price', 'entry_image', 'recommend_badge', 'experience_id', 'status'
    ];

    /**
     * This Model relationship with Category Model.
     *
     * @function belongsTo
     */
    public function experience()
    {
        return $this->belongsTo('App\Models\Admin\Product', 'experience_id');
    }
}
