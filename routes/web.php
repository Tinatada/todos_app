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

//Use function to show 'about' html
// Route::get('about', function() {
//    return view('about');
// });


// Another way instead of using funcition
// Pass a string of Controller and method name(with @)
Route::get('about', [AboutController::class, 'index']);
