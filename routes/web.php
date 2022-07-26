<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminPageController, CompanyCRUDController, ImageGalleryController, LogoutController, ProductcateguryController, StoreController, StorePageController,ProductController};
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\CheckStatus;
use App\Models\productcateguries;
use App\Models\productcategury;
use Illuminate\Support\Facades\Auth;

//use App\Http\Controllers\ImageGalleryController;
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

Auth::routes();
// StoreAuth::routes();


Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminPageController::class, 'index'])->name('adminhome');
    Route::get('/store', [AdminPageController::class, 'store'])->name('adminstore');
    route::get('storecurd',[AdminPageController::class,'test'])->name('adminstorecurd');
   
});

Route::prefix('store')->group(function () {
    Route::get('/home', [StorePageController::class, 'index'])->name('storehome');
    Route::get('/usersmange', [StorePageController::class, 'store'])->name('storeusersmange');
});


Route::resource('products', ProductController::class);


//Route::get('image-gallery', ImageGalleryController::class,'index');
// Route::get('image-gallery', ImageGalleryController::class);
// Route::post('image-gallery', ImageGalleryController::class,'upload');
// Route::delete('image-gallery/{id}', ImageGalleryController::class,'destroy');

route::resource('stores',StoreController::class);



Route::middleware([CheckStatus::class])->group(function(){

    Route::get('store', [StoreController::class,'index']);
});

Route::group(['prefix'  =>   'brands'], function() {

    Route::get('/', 'BrandController@index')->name('admin.brands.index');
    Route::get('/create', 'BrandController@create')->name('admin.brands.create');
    Route::post('/store', 'BrandController@store')->name('admin.brands.store');
    Route::get('/{id}/edit', 'BrandController@edit')->name('admin.brands.edit');
    Route::post('/update', 'BrandController@update')->name('admin.brands.update');
    Route::get('/{id}/delete', 'BrandController@delete')->name('admin.brands.delete');

});

// Route::group(['middleware' => ['auth']], function() {
//     /**
//     * Logout Route
//     */
//     // Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
//  });
//Route::get('/logout', [LoginController::class,'logout']);
//route::resource('companies',CompanyCRUDController::class);
route::resource('cat',ProductcateguryController::class);
// route::prefix('category')->group(function(){
//     route::get('AllCategory',ProductcateguryController::class,'AllCategory');
//     route::get('AddCategory',ProductcateguryController::class,'AddCategory');
//     route::get('index',ProductcateguryController::class,'index');
// });