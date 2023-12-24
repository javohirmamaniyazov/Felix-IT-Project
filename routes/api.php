<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMaterialController;
use App\Http\Controllers\WarehouseController;
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

Route::post('products', [ProductController::class, 'store']);
Route::get('/products-info/{id}', [ProductController::class, 'getProductInfo']);
Route::post('/materials', [MaterialController::class, 'store']);
Route::post('/product_materials', [ProductMaterialController::class, 'store']);
Route::post('/warehouses', [WarehouseController::class, 'store']);