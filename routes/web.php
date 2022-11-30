<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//$url = action([SiteController::class, 'demo3']);

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

//Route::get('/users/{id}', 'App\Http\Controllers\UsersController@show');

/*Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
return "posts $post, comments $comment";
});*/

Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('/hello', 'SiteController@Hello');
    Route::get('admin', 'SiteController@dashboard');
    //Route::get('pics', 'SiteController@gallery');
    Route::get('demo2', 'SiteController@demo2');
    Route::get('demo3', 'SiteController@demo3');
});

Route::get('doany', 'App\Http\Controllers\Api\PostController@doAny');

/*Route::get('demo3', function () {
return view('test.demo3');
})->name('mydemo');*/

Route::get('/url1', function () {
    return action([PostController::class, 'doAny']); //方法
});

//Route::resource('posts', 'App\Http\Controllers\PostController');
//Route::apiresource('posts', 'App\Http\Controllers\Api\PostController');

Route::get('/url', function () {
    //return url('demo3');//網域
    //return route('mydemo');
    return action([SiteController::class, 'demo3']); //方法
});

Route::any('store', 'App\Http\Controllers\PostController@store');