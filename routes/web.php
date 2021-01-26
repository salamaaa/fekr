<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix'=>'admin'],function (){
    Route::get('posts/create',[PostsController::class,'create'])
        ->name('posts.create');
    Route::post('posts/store',[PostsController::class,'store'])
        ->name('posts.store');
    Route::get('categories/create',[CategoriesController::class,'create'])
        ->name('categories.create');
    Route::post('categories/store',[CategoriesController::class,'store'])
        ->name('categories.store');
    Route::get('categories',[CategoriesController::class,'index'])
        ->name('categories.index');
    Route::get('categories/{id}/edit',[CategoriesController::class,'edit'])
        ->name('categories.edit');
    Route::post('categories/{id}/update',[CategoriesController::class,'update'])
        ->name('categories.update');
    Route::get('categories/{id}/destroy',[CategoriesController::class,'destroy'])
        ->name('categories.destroy');
});
