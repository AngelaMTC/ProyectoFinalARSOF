<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class RegisterController extends Controller
{
    //
    public function create(){

        // $products = ProductModel::all();

        // return view('home.index', compact('products'));
        return view('auth.register');
    }

    //Envíar formulario:
    public function store(){

        $this->validate(request(), [
            'name' =>'required',
            'email'=> 'required|email',
            'password'=> 'required|confirmed',
        ]);

        $user = UserModel::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');

    }
}
