<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/omelete/{ingrediente}', function ($ingred) {
    return "um omelete eh feito com $ingred";
});

Route::get('/omelete.view/{ingrediente}', function ($ingred) {
    $msg = "um omelete eh feito com $ingred";
    return view('omelete',compact('msg'));
});

Route::post('/omelete.controller', 
    ['uses'=>'App\Http\Controllers\omeleteController@index']
);

Route::post('/picadinho.controller', 
    ['uses'=>'App\Http\Controllers\picadinhoController@index']
);