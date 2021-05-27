<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'product_name', 'product_code', 'color', 'size', 'capacity', 'quantity', 'price', 'total_price',
    ];


    /**
     * This Model relationship with Entry Model.
     *
     * @function belongsTo
     */
    public function entry()
    {
        return $this->belongsTo(Entrylevel::class);
    }

    /**
     * This Model relationship with Experience Model.
     *
     * @function belongsTo
     */
    public function experience()
    {
        return $this->belongsTo('App\Models\Admin\Product', 'exp_id');
    }

    /**
     * This Model relationship with Order Model.
     *
     * @function belongsTo
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
