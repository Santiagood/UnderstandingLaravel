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


        //using the compact method
        // return view('products.index', compact('title', 'description'));

        //with method
        // return view('products.index') -> with('title', $title);
        //with method + loop
        //return view('products.index') -> with('data', $data);

        //directly in the view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about() {
        return 'About Us Page';
    }
}
