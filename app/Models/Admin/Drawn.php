<?php

namespace App\Models\Admin;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Drawn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exp_id', 'user_id', 'order_id', 'entry_id', 'status',
    ];

    /**
     * This Model relationship with User Model.
     *
     * @function belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * This Model relationship with Free User Model.
     *
     * @function belongsTo
     */
    public function free_user()
    {
        return $this->belongsTo('App\Models\Frontend\FreeEntry', 'free_user_id');
    }

    /**
     * This Model relationship with order Model.
     *
     * @function belongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * This Model relationship with experience Model.
     *
     * @function belongsTo
     */
    public function experience()
    {
        return $this->belongsTo('App\Models\Admin\Product', 'experience_id');
    }

    /**
     * This Model relationship with experience Model.
     *
     * @function belongsTo
     */
    public function entry()
    {
        return $this->belongsToMany('App\Models\Admin\Entrylevel', 'entry_id');
    }
}
