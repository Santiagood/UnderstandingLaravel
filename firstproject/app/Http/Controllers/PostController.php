<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        // $posts = DB::select('select * from posts where id = :id and title = :title', ['id' => 5, 'title' => 'Dr.']);
        // dd($posts);

        $id = 7;
        $posts = DB::table('posts')->where('id', $id)->get();

        dd($posts);
    }
}
