<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
       //Query get product selected in base with the id
       $product_id = $request->product_id;
       $product = DB::table('products')->where('id', $product_id)->get();
       $name_product = $product[0]->name;
       $value_product = $product[0]->value;

       $orders = Order::all();

       return view('orders.index', compact('orders', 'name_product', 'value_product', 'product_id'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_mobile' => 'required',
            'product_id' => 'required'
        ]);

        Order::create($request->all());
        return view('orders.detail');
    }

    public function show(Request $request)
    {
        //here my code
    }
}
