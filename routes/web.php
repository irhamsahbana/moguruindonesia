<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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
        Route::get('verification-notice', function () {
            return view('auth.verification_notice');
        })->name('verification.notice');
        Route::get('verification-invalid', function () {
            return view('auth.verification_token_invalid')->with(['f_msg' => 'OK']);
        })->name('verification.invalid');
        Route::get('send-confirm-email', [AuthController::class, 'confirmEmailSend'])->name('verification.send');
    });
    //for authenticated user only without more rules
    Route::get('verification-success', function () {
        return view('auth.verification_success');
    })->name('verification.success');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('welcome', function () {
        return view('customer.first_page');
    })->name('welcome');
});

Route::get('confirm-email/{token}', [AuthController::class, 'confirmEmail'])->name('verification.confirm');

Route::get('profile', function () {
    return view('customer.profile_page');
});
Route::get('tutor-catalog', function () {
    return view('customer.tutor_catalog');
});
Route::get('reservation', function () {
    return view('customer.reservation_page');
});
Route::get('payment-method', function () {
    return view('customer.payment_method');
});
Route::get('checkout', function () {
    return view('customer.checkout');
});
Route::get('payment', function () {
    return view('customer.payment');
});
Route::get('payment-success', function () {
    return view('customer.payment_success');
});
Route::get('absen', function () {
    return view('customer.absen_for_customer');
});
Route::get('step1', function () {
    return view('upgrade.step1');
});
Route::get('step2', function () {
    return view('upgrade.step2');
});
Route::get('step3', function () {
    return view('upgrade.step3');
});
Route::get('step4', function () {
    return view('upgrade.step4');
});
Route::get('upgrade-success', function () {
    return view('upgrade.upgrade_success');
});
Route::get('register-success', function () {
    return view('auth.register_success');
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
