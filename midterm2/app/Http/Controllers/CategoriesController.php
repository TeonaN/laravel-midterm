<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Products;



class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

        public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('CanPost');
    }

    public function index()

    {
        $categories=Categories::get();
        return view('categories.showcategories',["categories"=>$categories]);

    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view("admincategories.createcategories",["products" => Products::get()]);

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
            "title"=>"required"
        ]);

            Categories::create([
            "title"=>$request->input("title")

        ]);
        return redirect()->route("categories");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=Categories::where("id",$id)->firstOrFail();
        return view("categories.showcategories",["categories"=>$categories]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories=Categories::find($id)->firstOrFail();
        return view("admincategories.editcategories",["categories"=>$categories]); 
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
            "title"=>"required"
        ]);


             Categories::where("id",$request -> input("id"))->update([
            "title"=>$request->input("title")


        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Categories::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }

    


}
