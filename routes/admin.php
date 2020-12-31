<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');

Route::get('data/categories', 'DataTable\CategoryController')->name('categories.data');
Route::get('data/products', 'DataTable\ProductController')->name('products.data');
