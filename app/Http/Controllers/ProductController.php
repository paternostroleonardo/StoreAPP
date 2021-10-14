<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::all();
        ($products);
       return view('products.index', compact('products'));
    }


    public function store()
    {
        $product = request()->validate([
            'name' => '',
            'value' => '',
            'url_image' => ''
        ]);

        Product::create($product);
    }
}
