<?php

use App\Http\Controllers\User\Auth\AuthenticatedSessionController;
use App\Http\Controllers\User\Auth\ConfirmablePasswordController;
use App\Http\Controllers\User\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\User\Auth\EmailVerificationPromptController;
use App\Http\Controllers\User\Auth\NewPasswordController;
use App\Http\Controllers\User\Auth\PasswordResetLinkController;
use App\Http\Controllers\User\Auth\RegisteredUserController;
use App\Http\Controllers\User\Auth\VerifyEmailController;
use App\Http\Controllers\User\Auth\GoogleLoginController;
use App\Http\Controllers\User\ViewController;
use App\Http\Controllers\User\RegisterGraduateController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Archive;

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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('user.welcome');
    })->name('welcome');

    Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle'])
        ->name('googleLogin');

    Route::get('/login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

    // Route::get('/privacy-policy', function () {
    //     return view('user.privacy-policy');
    // })->name('privacy-policy');
});

Route::middleware('auth:users')->group(function () {
    Route::get('/home', function () {
        $archives = Archive::orderBy('title', 'desc')->get();
        return view('user.home')
            ->with(['archives' => $archives]);
    })->name('home');

    Route::get('/archive/{archive}', [ViewController::class, 'archiveShow'])
        ->where('archive', '[0-9]+')
        ->name('archive-show');

    Route::get('/mypage', function() {
        return view('user.mypage');
    })->name('mypage');

    Route::get('/register', [RegisterGraduateController::class, 'graduateLogin'])
        ->name('graduate-login');

    Route::get('/register/callback', [RegisterGraduateController::class, 'register']);
    
    // Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    //     ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    //     ->middleware(['signed', 'throttle:6,1'])
    //     ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //     ->middleware('throttle:6,1')
    //     ->name('verification.send');

    Route::get('/logout', [GoogleLoginController::class, 'logout'])
        ->name('logout');

    Route::get('/user-delete/confirm', function () {
        return view('user.auth.delete-confirm');
    })->name('delete-confirm');

    Route::get('/user-delete/complete', [GoogleLoginController::class, 'delete'])
        ->name('delete');
});
