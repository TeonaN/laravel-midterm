<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

use App\Categories;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {           
        $products=Products::get();
        $categories=Categories::get();

        return view('home',["products"=>$products],["categories"=>$categories]);
    }
}
