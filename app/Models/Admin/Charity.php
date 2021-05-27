<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'charity_name', 'charity_logo'
    ];
}
