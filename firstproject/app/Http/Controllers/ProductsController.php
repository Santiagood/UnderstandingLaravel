<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        print_r(route('products'));

        return view('products.index');
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
