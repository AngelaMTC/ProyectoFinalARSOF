<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        // return 'Admin';
        // $products = ProductModel::all();

        // return view('products.index', compact('products'));
        return redirect()->to('products.index');
    }

}
