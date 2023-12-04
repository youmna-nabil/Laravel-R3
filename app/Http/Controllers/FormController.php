<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        return view('show', compact('email', 'password'));
    }
}