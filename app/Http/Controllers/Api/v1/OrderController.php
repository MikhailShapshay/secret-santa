<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Order::join('order_items', 'orders.order_item_id', '=', 'order_items.id')
            ->join('user_carts', 'orders.user_cart_id', '=', 'user_carts.id')
            ->join('users', 'user_carts.user_id', '=', 'users.id')
            ->select([
                'users.id as id',
                'users.name as name',
                'orders.id as order_id',
                'order_items.id as item_id',
                'order_items.name as item_name',
                'orders.created_at as created_at'
            ])
            ->get();
    }
}
