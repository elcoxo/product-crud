<?php

use App\Http\Controllers\Products\Admin\CategoryController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SessionController;

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

Route::group([
    'namespace' => 'App\Http\Controllers\Auth',
], function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('auth.register.index');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('auth.register.store');

    Route::get('/login', [SessionController::class, 'create'])->name('auth.login.index');
    Route::post('/login', [SessionController::class, 'store'])->name('auth.login.store');
    Route::post('/logout', [SessionController::class, 'destroy'])->name('auth.logout');

});
