<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class picadinhoController extends Controller
{
    public function index(Request $req) {
        $ingred = $req['ingrediente'];
        $msg = "um picadinho eh feito com $ingred";
        return view('picadinho',compact('msg'));
    }
}
