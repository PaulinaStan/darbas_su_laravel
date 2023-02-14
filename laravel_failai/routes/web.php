<?php

use App\Http\Controllers\Admin\AddressController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentTypeController;
use App\Http\Controllers\Admin\PersonController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);

// Senas Routinimo variantas kai norime atskirai nurodyti kiekvieną route
//
//Route::get('/products', [ProductsController::class, 'index']);
//Route::get('/products/create', [ProductsController::class, 'create']);
//Route::post('/products', [ProductsController::class, 'store']);
//Route::get('/products/{product}', [ProductsController::class, 'show']);
//Route::get('/products/{product}/edit', [ProductsController::class, 'edit']);
//Route::put('/products/{product}', [ProductsController::class, 'update']);
//Route::delete('/products/{product}', [ProductsController::class, 'destroy']);

// Naujas Routinimo variantas kai norime naudoti resources standartizuotą routinimą
Route::resources([
    'products' => ProductsController::class,
    'categories' => CategoriesController::class,
    'orders' => OrderController::class,
    'statuses' => StatusController::class,
    'addresses' => AddressController::class,
    'users' => UserController::class,
    'persons' => PersonController::class,
    'paymentTypes' => PaymentTypeController::class,
]);
