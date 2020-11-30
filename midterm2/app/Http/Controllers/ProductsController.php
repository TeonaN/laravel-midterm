<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Input;

use App\Categories;




class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response


     */

        public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('CanPost');
    }

    public function index()

    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('adminProducts.create', [
            "categories" => Categories::get()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $this->validate($request,[
            "title"=>"required",
        ]);

        if (Input::file("image")){
            $dest=public_path("images");
            $filename=uniqid().".jpg";
            $img=input::file("image")->move($dest,$filename);
        }
            Products::create([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "price"=>$request->input("price"),
            "manufacturer"=>$request->input("manufacturer"),
            "short_description"=>$request->input("short_description"),
            "category_id"=>$request->input("category_id"),
            "image"=>$filename

        ]);
        return redirect()->route("home");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Products::where("id",$id)->firstOrFail();
        return view("products.show",["products"=>$products]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Categories::get();

        $products=Products::find($id)->firstOrFail();
        return view("adminProducts.edit",["products"=>$products],["categories"=>$categories]); 
           }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
            $this->validate($request,[
            "title"=>"required",
        ]);

             Products::where("id",$request -> input("id"))->update([
            "title"=>$request->input("title"),
            "description"=>$request->input("description"),
            "price"=>$request->input("price"),
            "manufacturer"=>$request->input("manufacturer"),
            "short_description"=>$request->input("short_description"),
            "category_id"=>$request->input("category_id"),

        ]);
                     return redirect()->route("home");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Products::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }
}
