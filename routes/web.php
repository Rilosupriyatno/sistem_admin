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
    return view('content.dash', [
        'title' => 'Dashboard',
        'description' => 'Dashboard'
    ]);
});
Route::get('/users', function () {
    return view('content.users', [
        'title' => 'Users',
        'description' => 'Users'
    ]);
});
Route::get('/products', function () {
    return view('content.products', [
        'title' => 'Products',
        'description' => 'Products'
    ]);
});
