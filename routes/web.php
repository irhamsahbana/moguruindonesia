<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TutorRegistration;
use Illuminate\Support\Facades\DB;

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
    //for authenticated user only, without addtional rules
    Route::view('verification-success', 'auth.verification_success')->name('verification.success');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('welcome', 'customer.first_page')->name('welcome');

    //Ordinary customer register as Tutor
    Route::middleware(['tutor.registration'])->group(function () {
        Route::get('tutor-registration-step-1', [TutorRegistration::class, 'selectTutorSubjects'])->name('tutor.reg.1');
        Route::post('step-1-next', [TutorRegistration::class, 'saveSubjectsAndNext'])->name('tutor.reg.1.next');
        Route::get('tutor-registration-step-2', [TutorRegistration::class, 'selectTutorDegrees'])->name('tutor.reg.2');
        Route::post('step-2-next', [TutorRegistration::class, 'saveDegreesAndNext'])->name('tutor.reg.2.next');
        Route::get('tutor-registration-step-3', [TutorRegistration::class, 'fillTutorBackground'])->name('tutor.reg.3');
        Route::post('step-3-next', [TutorRegistration::class, 'saveBackgroundAndNext'])->name('tutor.reg.3.next');
        Route::get('tutor-registration-step-4', [TutorRegistration::class, 'uploadCertAndID'])->name('tutor.reg.4');
        Route::post('step-4-next', [TutorRegistration::class, 'saveDoc'])->name('tutor.reg.4.next');
    });

    Route::view('upgrade-success', 'upgrade.upgrade_success')->name('tutor.reg.pending');
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

Route::view('register-success', 'auth.register_success');
Route::view('dashboard/myprofile', 'tutor.tutor_dashboard_profile');
Route::view('dashboard/edit-profile', 'tutor.tutor_dashboard_editProfile');
Route::view('dashboard/course-request', 'tutor.course_request');
Route::view('dashboard/course-detail', 'tutor.course_detail');
Route::view('dashboard/ongoing-course', 'tutor.ongoing_course');
Route::view('dashboard/history-course', 'tutor.history_course');
Route::view('dashboard/open-order', 'tutor.open_order');
Route::view('dashboard/absen-order', 'tutor.absen_for_tutor');


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
