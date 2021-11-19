<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = "Welcome to my Laravel 8 course";
        $description = "Created for my reference in the future";
        $data = [
            'product one' => 'iPhone',
            'product two' => 'Samsung'
        ];

        //directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about() {
        return 'About Us Page';
    }

    public function show($name) {
        $data = [
            'iPhone' => 'iPhone',
            'Samsung' => 'Samsung'
        ];

        return view('products.index', [
           'products' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }
}
