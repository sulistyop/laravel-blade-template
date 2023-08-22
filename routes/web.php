<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return view('hello', ['name' => 'Sulis']);
});

Route::get('/world', function (){
    return view('hello.world', ['name' => 'Laravel']);
});

Route::view('/template','hello',['name' => 'Sulis']);

Route::get('/html-endcoding', function (\Illuminate\Http\Request $request){
    return view('html-endcoding', ['name' => $request->input('name')]);
});

Route::view('/each','each', [
    "users" => [
        [
            "name" => "Sulis",
            "hobbies" => ["Coding", "Gaming"]
        ],
        [
            "name" => "Tyo",
            "hobbies" => ["Coding", "Gaming"]
        ],
    ]
]);

