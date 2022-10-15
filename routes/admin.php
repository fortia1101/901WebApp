<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\AdminExitController;
use App\Http\Controllers\Admin\ArchiveSetController;
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

Route::middleware('auth:users')->group(function () {
    Route::get('/', function () {
        return view('admin.welcome');
    })->name('welcome');

    Route::get('/dashboard', function () {
        session()->put('admin', 1);
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/exit', [AdminExitController::class, 'exit'])
        ->name('exit');

    Route::post('/archive-set', [ArchiveSetController::class, 'archiveSet'])
        ->name('archive-set');
});

Route::middleware('auth:admin')->group(function () {});
