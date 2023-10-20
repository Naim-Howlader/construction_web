<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Auth\RegisteredUserController;


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

/* -------------------------------------------------------------------------- */
/*                               Frontend routes starts                       */
/* -------------------------------------------------------------------------- */
Route::get('/', [CommonController::class, 'index'])->name('home');
Route::get('/projects', [CommonController::class, 'projects'])->name('common.projects');
Route::get('/news/{id}', [CommonController::class, 'news'])->name('common.news');
Route::get('/news', [CommonController::class, 'allNews'])->name('common.all-news');



/* -------------------------------------------------------------------------- */
/*                               Frontend routes ends                         */
/* -------------------------------------------------------------------------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    //---------For entering into the project section in admin panel
    Route::group(['prefix' => 'galleries'], function () {
        Route::get('/', [CategoryController::class, 'projectView'])->name('gallery.index');

        //--------Category Route-------
        Route::get('/add-category', [CategoryController::class, 'index'])->name('add-category');
        Route::post('/insert-category', [CategoryController::class, 'insert'])->name('insert-category');
        Route::get('/view-category', [CategoryController::class, 'catView'])->name('view-category');
        Route::get('/category-delete/{category_id}', [CategoryController::class, 'catDelete'])->name('delete-category');
        Route::get('/category-edit/{id}', [CategoryController::class, 'catEdit'])->name('edit-category');
        Route::post('/category-update/{id}', [CategoryController::class, 'catUpdate'])->name('update-category');

        //---------Gallery Route----------

        Route::get('/add-gallery', [GalleryController::class, 'addGallery'])->name('gallery.add');
        Route::post('/insert-gallery', [GalleryController::class, 'insert'])->name('gallery.insert');
        Route::post('/update-gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::get('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');

    });
    //---------For entering into the news section in admin panel

    Route::get('/readimix', [NewsCategoryController::class, 'newsView'])->name('news');
    Route::group(['prefix' => 'news', 'as' => 'category.'], function () {
        //---------News Category Route--------
        Route::get('/add-category', [NewsCategoryController::class, 'addNewsCat'])->name('add');
        Route::post('/insert-category', [NewsCategoryController::class, 'insert'])->name('insert');
        Route::get('/delete-category/{id}', [NewsCategoryController::class, 'destroy'])->name('delete');
        Route::get('/edit-category/{id}', [NewsCategoryController::class, 'edit'])->name('edit');
        Route::post('/update-category/{id}', [NewsCategoryController::class, 'update'])->name('update');
    });
    //---------News Route---------
    Route::group(['prefix' => 'readimix', 'as' => 'news.'], function () {
        Route::get('/add-news', [NewsController::class, 'addNews'])->name('add');
        Route::post('/insert-news', [NewsController::class, 'insert'])->name('insert');
        Route::get('/delete-news/{id}', [NewsController::class, 'destroy'])->name('delete');
        Route::get('/edit-news/{id}', [NewsController::class, 'edit'])->name('edit');
        Route::post('/update-news/{id}', [NewsController::class, 'update'])->name('update');
    });

    //---------User Route---------

    Route::get('/users', [UserController::class, 'usersView'])->name('users');
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('/user-delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/users', [UserController::class, 'usersView'])->name('users');
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);


    /**
     * *Update code
     */
    //--------Slider Route-----------
    Route::get('/slider', [SliderController::class, 'sliderView'])->name('slider');
    Route::group(['prefix' => 'slider', 'as' => 'slider.'], function(){
        Route::get('/add-slider', [SliderController::class, 'addSlider'])->name('add');
        Route::post('/insert-slider', [SliderController::class, 'insertSlider'])->name('insert');
        Route::get('/edit-slider/{id}', [SliderController::class, 'editSlider'])->name('edit');
        Route::post('/update-slider/{id}', [SliderController::class, 'updateSlider'])->name('update');
        Route::get('/delete-slider/{id}', [SliderController::class, 'deleteSlider'])->name('delete');
    });

});
