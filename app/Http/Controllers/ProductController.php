<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Milon\Barcode\DNS2D;

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
        $number = mt_rand(10000000, 99999999);
        

        if ($this->productCodeExists($number)) {
            $number = mt_rand(10000000, 99999999);
        }
        $numberImg = $number.'.png';
        $barcodeImg = base64_decode(DNS2D::getBarcodePNGPath($number, 'PDF417'));
        \Storage::disk('public_uploads')->put($numberImg, $barcodeImg);
   

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->barcode = asset("");
        $product->description = $request->desc;
        $product->save();
        return redirect('');
    }

    public function productCodeExists($number)
    {
        return product::whereBarcode($number)->exists();
    }
}
