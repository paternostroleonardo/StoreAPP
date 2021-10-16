<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\PayService;
use Illuminate\Support\Facades\Http;


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

       return view('orders.index', compact('name_product', 'value_product', 'product_id'));
    }


    public function store(Request $request)
    {
        $value_product = $request->value_product;
        $name_product = $request->name_product;

       $create_order = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_mobile' => 'required',
            'product_id' => 'required'
        ]);

       $order = Order::create($create_order);

        return view('orders.detail', ['order' => $order], compact('value_product', 'name_product'));
    }

    public function show(Order $order, Request $request)
    {
        return view('orders.detail');
    }

    public function pay(Request $request)
    {
        dd($request);
       return redirect('orders.detail');
    }

    public function response($order_id)
    {
        $data = (object)[];
        $order = Order::find($order_id);

        $response = PayService::getRequestInfo($order->requestId);
        $order->status = $response['status']['status'];
        $order->save();
        switch ($order->status) {
            case 1:
                  $data->estado_compra = "Creada";
                break;
            case 2:
                $data->estado_compra = "Pagada";
                break;
            case 3:
                $data->estado_compra = "Rechazada";
                break;
        }

        $data->order = $order;
        return view('products.index', [ 'data' => $data]);
    }
}
