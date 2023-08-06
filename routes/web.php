<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    $post=[];
    if(auth()->check()){
        $post = auth()->user()->UsersPosts()->latest()->get();

    }
    //$post=Post::all();
    return view('home',['posts'=>$post]);
});
//usercontrller
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
//post controller
Route::post('/create_post',[PostController::class,'create_post']);
Route::get('/edit-post/{post}',[PostController::class,'show_edit_screan']);
Route::put('/edit-post/{post}',[PostController::class,'update_post']);
Route::delete('/delete-post/{post}',[PostController::class,'delete_post']);

