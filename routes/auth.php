<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
//-----Custome Controller---------
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GalleryController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
//----------Custome Route----------
Route::middleware('auth')->group(function (){
    //--------Category Route-------
    Route::get('/project', [CategoryController::class, 'projectView'])->name('project');
    Route::get('/add-category', [CategoryController::class, 'index'])->name('add-category');
    Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert-category');
    Route::get('/view-category', [CategoryController::class, 'catView'])->name('view-category');
    Route::get('/category-delete/{category_id}', [CategoryController::class, 'catDelete'])->name('delete-category');
    Route::get('/category-edit/{id}', [CategoryController::class, 'catEdit'])->name('edit-category');
    Route::post('/category-update/{id}', [CategoryController::class, 'catUpdate'])->name('update-category');

    //---------Gallery Route----------
    Route::get('/add-gellery', [GalleryController::class, 'addGallery'])->name('add-gallery');
    Route::post('/insert-gallery', [GalleryController::class, 'insert'])->name('insert-gallery');
});
