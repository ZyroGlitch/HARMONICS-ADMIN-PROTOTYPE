<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/dashboard', [AdminController::class,'dashboard'])
->name('view.dashboard');

Route::get('/orders', [AdminController::class,'orders'])
->name('view.orders');

Route::get('/product', [AdminController::class,'product'])
->name('view.product');

Route::get('/salesReport', [AdminController::class,'salesReport'])
->name('view.salesReport');

Route::get('/customers', [AdminController::class,'customers'])
->name('view.customers');

Route::get('/messages', [AdminController::class,'messages'])
->name('view.messages');


// ORDERS ROUTE
Route::get('/viewOrder', [AdminController::class,'viewOrder'])
->name('view.viewOrder');

Route::post('/editOrder', [AdminController::class,'editOrder'])
->name('view.editOrder');