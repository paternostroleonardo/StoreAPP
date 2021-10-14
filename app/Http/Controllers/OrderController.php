<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
       $orders = Order::all();

       return view('orders.index', compact('orders'));
    }


    public function store()
    {
        $order = request()->validate([
            'product_id' => '',
            'code' => '',
            'customer_name' => '',
            'customer_email' => '',
            'customer_mobile' => '',
            'status' => ''
        ]);
           //dd($single_order);
        Order::create($order);
    }
}
