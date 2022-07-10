<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminPageController, StoreController, StorePageController,ProductController};
use App\Http\Middleware\CheckStatus;
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

Auth::routes();
// StoreAuth::routes();


Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminPageController::class, 'index'])->name('adminhome');
    Route::get('/store', [AdminPageController::class, 'store'])->name('adminstore');
});

Route::prefix('store')->group(function () {
    Route::get('/home', [StorePageController::class, 'index'])->name('storehome');
    Route::get('/usersmange', [StorePageController::class, 'store'])->name('storeusersmange');
});
Route::resource('products', ProductController::class);
Route::resource('store', StoreController::class);

Route::middleware([CheckStatus::class])->group(function(){

    Route::get('store', [StoreController::class,'index']);
});
