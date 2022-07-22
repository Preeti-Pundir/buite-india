<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;


class AdminPageController extends Controller
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
        return view('admin.home');
    }

    public function store()
    {
        return view('admin.store');
    }
    public function test()
    {
       
        $store = store::all();
        return view('stores');
        //return view('admin.stores', compact('store'));
   }
}
