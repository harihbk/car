<?php

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index']);

// Route::get('/{id}', function (string $id) {
//     return 'User ';
// });

Route::get('/{slug}', [App\Http\Controllers\WelcomeController::class, 'slugurl'] )->name('cars.slug');



Auth::routes();

Route::group(['prefix' => 'admin'], function()
{

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('productTypes', App\Http\Controllers\product_typeController::class);


Route::resource('brands', App\Http\Controllers\BrandController::class);


Route::resource('producttypes', App\Http\Controllers\ProducttypeController::class);


Route::resource('pvalues', App\Http\Controllers\PvalueController::class);


Route::resource('carmasters', App\Http\Controllers\CarmasterController::class);


Route::resource('cars', App\Http\Controllers\CarController::class);


Route::resource('carimages', App\Http\Controllers\CarimageController::class);

});
