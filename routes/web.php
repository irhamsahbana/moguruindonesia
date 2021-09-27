<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('login', [AuthController::class, 'login'])->name('auth.login');
Route::post('login/user', [AuthController::class, 'loginUser'])->name('auth.login.user');
Route::get('register', [AuthController::class, 'register'])->name('auth.register');
Route::post('register/user', [AuthController::class, 'registerUser'])->name('auth.register.user');

Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

Route::get('welcome', function () {
    return view('customer.first_page');
});
Route::get('profile', function () {
    return view('customer.profile_page');
});


// domain.test => landing page & homepage users customer
// domain.test => landing page & homepage users tutor

// domain.test/fname-lname-xxx => profile users tutor dan cust
// domain.test/admin/ => profile users admin
// domain.test/order/presence =>

//done
// Route::get('coba-login', function () {
// return view('auth.new_login');
// });
//done
// Route::get('coba-register', function () {
//     return view('auth.register');
// });
