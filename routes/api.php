<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CacheController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('test', [ProductController::class, 'index']);

Route::resources([
    'animal' => AnimalController::class,
    'product' => ProductController::class,
    'cache' => CacheController::class,
]);

// Route::apiResources([
//     'animal' => 'AnimalController',
//     'product' => 'ProductController'
//     ]);