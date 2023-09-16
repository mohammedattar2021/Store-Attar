<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/app', function () {
//     return view('admin.categories.create');
// });
Route::get('/dashboard', function () {
    return view('layout.dashboard');
});
// Route::get('add/category',[CategoriesController::class,'create']);
Route::prefix('admin')->group(function () {
    Route::resource('/category', CategoriesController::class);
    Route::get('index',[CategoriesController::class,'index']);
    Route::get('/categories', function () {
        return view('admin.categories');
    });
});


