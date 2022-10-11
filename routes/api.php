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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('tags', TagAPIController::class);

Route::resource('banners', BannerAPIController::class);

Route::resource('categories', CategoryAPIController::class);


Route::get('subproducts/{id}', 'ProductAPIController@subproduct');

// Route::get('subproducts/{id}', [ ProductAPIController::class,'subproduct']);

Route::resource('sub_categories', SubCategoryAPIController::class);

Route::resource('products', ProductAPIController::class);

Route::resource('product_images', ProductImageAPIController::class);

Route::resource('orders', App\Http\Controllers\API\OrderAPIController::class);
