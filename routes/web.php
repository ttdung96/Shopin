<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
/*Route::get('/', function () {
    return view('frontpage.home');
});*/
Route::get('/', function () {
    return view('frontpage.home');
});
Route::get('/home', function () {
    return view('frontpage.home');
});

Route::get('/login', function () {
    return view('frontpage.login');
});

Route::get('/products', function () {
    return view('frontpage.products');
});

Route::get('/single', function () {
    return view('frontpage.single');
});

Route::get('/about', function () {
    return view('frontpage.about');
});