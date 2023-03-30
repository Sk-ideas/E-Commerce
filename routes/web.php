<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerControl;
use App\Http\Controllers\employcontroller;
use App\Http\Controllers\admincontroller;
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
Route::get('/login', function () {
    return view('login');
});
Route::post('/register', [CustomerControl::class,'register']);
Route::post('/submit', [CustomerControl::class,'submit']);
Route::get('/index', function () {
    return view('index');
});
Route::get('/fashion', function () {
    return view('fashion');
});
Route::get('/jewellery', function () {
    return view('jewellery');
});
Route::get('/electroinc', function () {
    return view('electronic');
});
Route::post('/employ', [employController::class,'employ']);
Route::post('/know', [employController::class,'know']);
Route::get('/self', function () {
    return view('staff');
});
Route::get('/emlogin', function () {
    return view('emlogin');
});
Route::get('/ad', function () {
    return view('adminreg');
});
Route::get('/adlogin', function () {
    return view('adlogin');
});
Route::post('/admin', [employController::class,'admin']);
Route::post('/adlog', [employController::class,'adlog']);
Route::get('/cart/{id}', [CustomerControl::class,'cart']);
Route::get('/adminpage', [adminController::class,'adminpage']);
Route::get('/edit/{id}', [adminController::class,'edit']);
Route::get('/buy', function () {
    return view('buy');
});
// Route::get('/adminpage', function () {
//     return view('adminpage');
// });