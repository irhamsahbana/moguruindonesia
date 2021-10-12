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

// for unauthenticate user (not login or authenticated)
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('login/user', [AuthController::class, 'loginUser'])->name('auth.login.user');
    Route::get('register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('register/user', [AuthController::class, 'registerUser'])->name('auth.register.user');

    Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');
});

//for authenticated user
Route::middleware(['auth'])->group(function () {
    //only for user that unverified
    Route::middleware(['unverified'])->group(function () {
        Route::view('verification-notice', 'auth.verification_notice')->name('verification.notice');
        Route::get('verification-invalid', function () {
            return view('auth.verification_token_invalid')->with(['f_msg' => 'OK']);
        })->name('verification.invalid');
        Route::get('send-confirm-email', [AuthController::class, 'confirmEmailSend'])->name('verification.send');
    });
    //for authenticated user only without more rules
    Route::view('verification-success','auth.verification_success')->name('verification.success');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('welcome', 'customer.first_page')->name('welcome');
});

Route::get('confirm-email/{token}', [AuthController::class, 'confirmEmail'])->name('verification.confirm');

Route::view('profile', 'customer.profile_page');
Route::view('tutor-catalog', 'customer.tutor_catalog');
Route::view('reservation', 'customer.reservation_page');
Route::view('payment-method', 'customer.payment_method');
Route::view('checkout', 'customer.checkout');
Route::view('payment', 'customer.payment');
Route::view('payment-success', 'customer.payment-success');
Route::view('absen', 'customer.absen_for_customer');

Route::view('step1', 'upgrade.step1');
Route::view('step2', 'upgrade.step2');
Route::view('step3', 'upgrade.step3');
Route::view('step4', 'upgrade.step4');
Route::view('step4', 'upgrade.step4');
Route::view('upgrade-success', 'upgrade.upgrade_success');
Route::view('register-success', 'auth.register_success');
Route::view('dashboard/myprofile', 'tutor.tutor_dashboard_profile');
Route::view('dashboard/edit-profile', 'tutor.tutor_dashboard_editProfile');


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
