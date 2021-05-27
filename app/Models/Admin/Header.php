<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone', 'email', 'logo', 'logo_size'
    ];
}
