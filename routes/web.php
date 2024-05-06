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
    
    $helloworld = "HelloWorld!!";
    return view('home', compact("helloworld"));

})->name('Home');

Route::get("/nextPage", function() {

    $helloworld = "HelloWorld!";
    return view('nextPage', compact("helloworld"));

})->name('SecondaryPage');
