<?php

namespace App\Http\Controllers;

use App\{Post, Work};
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work = Work::latest()->first();
        $post = Post::latest()->first();
        return view('home', compact('work', 'post'));
    }
}
