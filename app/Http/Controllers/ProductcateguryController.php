<?php

namespace App\Http\Controllers;

use App\Models\productcateguries;
use App\Models\productcategury;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class ProductcateguryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function AllCategory(){
    //     $all_cat = productcateguries::get();
    //     return $all_cat;
    // }
    // public function AddCategory(Request $request){

    //     $validatedData = $request->validate([
    //         'name' => 'required|unique:categories|max:255',

    //     ],[
    //         'name.required' => 'Please Input Category Name',

    //     ]);
    //          // Elequent method 1
    //     Productcateguries::insert([
    //         'name'=>$request->name,


    //         'created_at'=>Carbon::now()

    //     ]);


    //     return Redirect()->back()->with('success','Category Inserted Successfully');
    // }

    public function index()
    {
        $all_cat = productcateguries::get();
        return view($all_cat);
        //return view('categories.productcategories.index',compact('all_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productcategury  $productcategury
     * @return \Illuminate\Http\Response
     */
    public function show(productcategury $productcategury)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productcategury  $productcategury
     * @return \Illuminate\Http\Response
     */
    public function edit(productcategury $productcategury)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productcategury  $productcategury
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productcategury $productcategury)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productcategury  $productcategury
     * @return \Illuminate\Http\Response
     */
    public function destroy(productcategury $productcategury)
    {
        //
    }
}
