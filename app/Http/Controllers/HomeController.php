<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    //
    public function index(){
        // $products = ProductModel::all();
        // return view('products.index', compact('products'));

        // $products = \DB::table('products')->select('users.*')->get();
        // return view('products')->with('products', $products);

        $products = DB::table('products')->get();
        return view('home.index', compact('products'));

    }
}
