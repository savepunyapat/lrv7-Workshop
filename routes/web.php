<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;


Route::get('/user/{name}', function ($name) {
    return 'Hello, ' . $name;
});
Route::get('/', [BasicController::class, 'home']);
Route::get('/about', [BasicController::class, 'about']);
Route::get('/service', [BasicController::class, 'service']);
Route::get('/contact', [BasicController::class, 'contact']);
Route::get('/portfolio', [BasicController::class, 'portfolio']);
Route::get('/blog', [BasicController::class, 'blog']);
Route::get('/employees', [BasicController::class, 'employees']);
Route::get('/employeeslist', [BasicController::class, 'employeeslist']);
