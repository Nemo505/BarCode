<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('products/index', ["products" => $products]);
    }

    public function create()
    {
       return view('products/create');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->desc;
        $product->save();
        return redirect('');
    }
}
