<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_id', 'qty', 'price'];

    /**
     * The product that belong to the orderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function product()
    {
        return $this->belongsToMany(Product::class, 'product_id', 'id');
    }

    /**
     * Get the order associated with the orderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne(Order::class, 'order_id', 'id');
    }
}
