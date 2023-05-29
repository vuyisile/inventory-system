<?php

use App\Http\Controllers\Api\V1\ListProductsController;
use App\Http\Controllers\Api\V1\AddProductController;
use App\Http\Controllers\Api\V1\UpdateProductController;
use App\Http\Controllers\Api\V1\RemoveProductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1', 'namespace'=>'App\Http\Controllers\Api'],
function (){
    Route::get('/view/products', [ListProductsController::class, 'index']);
    Route::post('/add/product', [AddProductController::class, 'store']);
    Route::put('/update/product/{id}', [UpdateProductController::class, 'update']);
    Route::delete('/remove/product/{id}', [RemoveProductController::class, 'remove']);
}
);
