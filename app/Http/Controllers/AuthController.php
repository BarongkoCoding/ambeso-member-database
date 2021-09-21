<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('nohp','pin'))){
            return redirect('/Member');
        }
        return redirect('/');
    }
}
