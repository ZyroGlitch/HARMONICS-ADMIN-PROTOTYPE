<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [AdminController::class,'login'])
->name('view.login');

Route::get('/register', [AdminController::class,'register'])
->name('view.register');

Route::get('/loaders', [AdminController::class,'loaders'])
->name('view.loaders');

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


// LOGIN ROUTE
Route::post('/loginAuth', [AdminController::class,'loginAuth'])
->name('view.loginAuth');

// REGISTER ROUTE
Route::post('/registerAccount', [AdminController::class,'registerAccount'])
->name('view.registerAccount');

// FORGOT PASSWORD ROUTE
Route::post('/forgotPassword', [AdminController::class,'forgotPassword'])
->name('view.forgotPassword');


// ORDERS ROUTE
Route::get('/viewOrder', [AdminController::class,'viewOrder'])
->name('view.viewOrder');

Route::post('/editOrder', [AdminController::class,'editOrder'])
->name('view.editOrder');


// PRODUCT ROUTE
Route::post('/editProduct', [AdminController::class,'editProduct'])
->name('view.editProduct');

// SALES REPORT ROUTE
Route::get('/viewSalesReport', [AdminController::class,'viewSalesReport'])
->name('view.viewSalesReport');

Route::get('/download', [AdminController::class,'download'])
->name('view.download');

// CUSTOMER ROUTE
Route::get('/viewProfile', [AdminController::class,'viewProfile'])
->name('view.viewProfile');

// MESSAGES ROUTE
Route::get('/viewMessage', [AdminController::class,'viewMessage'])
->name('view.viewMessage');

Route::post('/sendResponse', [AdminController::class,'sendResponse'])
->name('view.sendResponse');