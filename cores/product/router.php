<?php

use Illuminate\Support\Facades\Route;
use Product\Http\Controllers\ProductController;

// prefix: product

// define
Route::get('/',[ProductController::class,'index']);
