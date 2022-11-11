<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_cart_id',
        'order_item_id',
    ];

    /**
     * Связи
     */
    public function user_carts()
    {
        return $this->belongsTo(UserCart::class, 'user_cart_id', 'id');
    }

    public function order_items()
    {
        return $this->belongsTo(OrderItem::class, 'order_item_id', 'id');
    }
}
