<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class SessionsController extends Controller
{
    //
    public function create(){

        return view('auth.login');
    }
    //Inicio de sesión:
    public function store(){

        if (auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again',
            ]);
        }else{
            if(auth()->user()->role == 'Profesor'){
                return redirect()->route('products.index');
            }
        }
        return redirect()->to('/');
    // return view('products.index', compact('products'));
    } 

    //Cerrar sesión:
    public function destroy(){
        auth()->logout();

    return redirect()->to('/login');
    // return view('products.index', compact('products'));
    }
}
