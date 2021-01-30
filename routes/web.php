<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
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

Route::get('test',function (){
   return \App\Models\Profile::find(1)->user;

});
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix'=>'admin'],function (){

    //admin posts routes
    Route::get('posts/create',[PostsController::class,'create'])
        ->name('posts.create');
    Route::post('posts/store',[PostsController::class,'store'])
        ->name('posts.store');
    Route::get('posts',[PostsController::class,'index'])
        ->name('posts.index');
    Route::get('posts/{id}/edit',[PostsController::class,'edit'])
        ->name('posts.edit');
    Route::post('posts/{id}/update',[PostsController::class,'update'])
        ->name('posts.update');
    Route::get('posts/{id}/destroy',[PostsController::class,'destroy'])
        ->name('posts.destroy');
    Route::get('posts/trashed',[PostsController::class,'trashed'])
        ->name('posts.trashed');
    Route::get('posts/trashed/{id}/restore',[PostsController::class,'restore'])
        ->name('posts.restore');
    Route::get('posts/trashed/{id}/permanently/delete',[PostsController::class,'perDelete'])
        ->name('posts.perDelete');

    //******* admin categories routes
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

    //******* admin tags routes
    Route::get('tags',[TagsController::class,'index'])
        ->name('tags.index');
    Route::get('tags/create',[TagsController::class,'create'])
        ->name('tags.create');
    Route::post('tags/store',[TagsController::class,'store'])
        ->name('tags.store');
    Route::get('tags/{id}/edit',[TagsController::class,'edit'])
        ->name('tags.edit');
    Route::post('tags/{id}/update',[TagsController::class,'update'])
        ->name('tags.update');
    Route::get('tags/{id}/destroy',[TagsController::class,'destroy'])
        ->name('tags.destroy');

    //******* admin users routes
    Route::get('users',[UsersController::class,'index'])
        ->name('users.index');
    Route::get('users/create',[UsersController::class,'create'])
        ->name('users.create');
    Route::post('users/store',[UsersController::class,'store'])
        ->name('users.store');
    Route::get('users/{id}/edit',[UsersController::class,'edit'])
        ->name('users.edit');
    Route::post('users/{id}/update',[UsersController::class,'update'])
        ->name('users.update');
    Route::get('users/{id}/destroy',[UsersController::class,'destroy'])
        ->name('users.destroy');
});
