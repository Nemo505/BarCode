<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarCodeController extends Controller
{
    public function barcode()
    {
        return view('barcode');
    }
}
