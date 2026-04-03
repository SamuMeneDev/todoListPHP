<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
    return view("login");
    }


    public function login(Request $request) {

        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->senha])) {
            return redirect()->intended("/home");
        } else {
            return redirect("/login");
        }
   
    }
   
    
    public function logout() {
        Auth::logout();
        return redirect("/login");
    }
}
