<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class omeleteController extends Controller
{
    public function index(Request $req) {
        $ingred = $req['ingrediente'];
        $msg = "um omelete eh feito com $ingred";
        return view('omelete',compact('msg'));
    }
}
