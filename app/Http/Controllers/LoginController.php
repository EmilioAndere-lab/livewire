<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function auth(Request $request){
        if($request->user == 'emilio' && $request->password == 'caballero'){
            return view('home', ['name' => 'emilio']);
        }
    }
}
