<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [CommonController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/project', function () {
//     return view('project');
// })->middleware(['auth', 'verified'])->name('project');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//----------Custome Route----------
Route::middleware('auth')->group(function () {
    //--------Category Route-------
    Route::get('/project', [CategoryController::class, 'projectView'])->name('project');
    Route::get('/add-category', [CategoryController::class, 'index'])->name('add-category');
    Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert-category');
    Route::get('/view-category', [CategoryController::class, 'catView'])->name('view-category');
    Route::get('/category-delete/{category_id}', [CategoryController::class, 'catDelete'])->name('delete-category');
    Route::get('/category-edit/{id}', [CategoryController::class, 'catEdit'])->name('edit-category');
    Route::post('/category-update/{id}', [CategoryController::class, 'catUpdate'])->name('update-category');

    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
        //---------Gallery Route----------
        Route::get('/add-gallery', [GalleryController::class, 'addGallery'])->name('add');
        Route::post('/insert-gallery', [GalleryController::class, 'insert'])->name('insert');
        Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('destroy');
    });
});