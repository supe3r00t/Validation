<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('posts',\App\Http\Controllers\PostController::class);


Route::get('posts',\App\Http\Controllers\PostController::class);





Route::controller(PostController::class)->group(function () {

    Route::get('posts', 'showUsers');
    Route::get('posts/create', 'createPost');
    Route::get('posts/edit/{id}', 'editPost');
    Route::get('posts/update/{id}', 'updatePost');
    Route::get('posts/delete/{id}', 'deletePost');
});
//Route::get('/posts', function () {
//$post = 'new post';
//  return view('posts',compact('post'));
//});

//Route::get('posts',[PostController::class,'showUsers']);

//Route::get('posts/create',[PostController::class,'createPost']);
//Route::get('posts/edit/{id}',[PostController::class,'editPost']);
//Route::get('posts/update/{id}',[PostController::class,'updatePost']);
//Route::get('posts/delete/{id}',[PostController::class,'deletePost']);

Route::get('posts/create', [PostController::class, 'createPost']);
Route::get('posts/delete', [PostController::class, 'deletepost']);


Route::get('posts/delete',[\App\Http\Controllers\PostController::class,cretePosts]);
//اذا ابي اجيب جميع الروتر
//ابي اعكس واحد ماجيبه احط معهن ////
//except
//
Route::resource('users', \App\Http\Controllers\UsersController::class)->except([
    'show', 'crte'

]);
//only لتشغل وحده فقط
//except ايقاف الوحده


//Route::get('user_Profile',[UserProfileController::class,'__invoke')];
Route::get('user_profile', [UserProfileController::class, '__invoke']);


Route::get('/posts', [PostController::class, 'show']);

