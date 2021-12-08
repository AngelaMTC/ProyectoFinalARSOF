<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;


class AssignmentController extends Controller
{
    //
    public function index(Request $request, $id){
        $products = $request->session()->get('products');
        return view('products.home', compact('products'));
    }
}
