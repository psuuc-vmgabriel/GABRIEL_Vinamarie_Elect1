<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\OrderController;

Route::get('/customer/{id}/{name}/{address}', [OrderController::class, 'customerDetails']);
Route::get('/item/{itemNo}/{name}/{price}', [OrderController::class, 'item']);
Route::get('/order/{customerId}/{name}/{orderNo}/{date}', [OrderController::class, 'order']);
Route::get('/orderdetails/{transNo}/{orderNo}/{itemID}/{itemName}/{price}/{qty}', [OrderController::class, 'orderDetails']);
