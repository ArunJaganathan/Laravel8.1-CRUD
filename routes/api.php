<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});






Route::resource('categories', App\Http\Controllers\API\CategoryAPIController::class);
//Route::resource('product/{slug}', App\Http\Controllers\API\CategoryAPIController::class@getProducts);

Route::resource('product', App\Http\Controllers\API\ProductAPIController::class)->parameters([
    'categories' => 'categories:slug',
]);



Route::resource('sub_categories', App\Http\Controllers\API\SubCategoryAPIController::class);




Route::resource('tests', App\Http\Controllers\API\TestAPIController::class);


Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);


Route::resource('product_tests', App\Http\Controllers\API\ProductTestAPIController::class);


Route::resource('coupon_codes', App\Http\Controllers\API\CouponCodeAPIController::class);
