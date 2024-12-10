<?php

use App\Http\Controllers\Products\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

$groupData = [
    'namespace' => 'App\Http\Controllers\Products\Admin',
    'prefix' => 'admin/products',
];
Route::group($groupData, function () {
    $methods = ['index', 'show', 'create', 'store', 'edit', 'update'];
    Route::resource('categories', CategoryController::class)
        ->only($methods)
        ->names('products.admin.categories');
});
