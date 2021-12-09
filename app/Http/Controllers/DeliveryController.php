<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class DeliveryController extends Controller
{
    public function store(Request $request){
        $product = new ProductModel();

        $product->title = $request->title;
        $product->subject = $request->subject;
        $product->delivery = $request->delivery;
        $product->status = $request->status;

        $product->save();

        return redirect()->route('products.index');
    }
    
    public function edit($id){
        $products =ProductModel::all();
        $product = ProductModel::find($id);
        return view('products.editDelivery', compact('product', 'products'));
        }

        public function update(Request $request, $id){
            $input = $request->all();
    
            $product = ProductModel::find($id);
            $product->title =$input['title'];
            $product->subject =$input['subject'];
            $product->delivery =$input['delivery'];
            $product->status=$input['status'];
    
            $product->save();
            return redirect()->route('products.editDelivery');
    
            }
}