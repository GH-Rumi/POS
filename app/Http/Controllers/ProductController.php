<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food()
    {
        return view('products', ['category' => 'Food & Beverage']);
    }

    public function beauty()
    {
        return view('products', ['category' => 'Beauty & Health']);
    }

    public function homecare()
    {
        return view('products', ['category' => 'Home Care']);
    }

    public function baby()
    {
        return view('products', ['category' => 'Baby & Kid']);
    }
}
