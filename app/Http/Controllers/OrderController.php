<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function payment(Order $order)
    {
        return view('orders.payment', compact('order'));
    }
}
