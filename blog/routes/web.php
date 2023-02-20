<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [HomeController::class, "show"]);

Route::controller(PostsController::class) ->group(function (){
    Route::get('/posts/{id}', "show");
    Route::get('/posts/create', "create");
    Route::post('/posts', "store");
    Route::get('/posts/{id}/edit', "edit");
    Route::patch('/posts/{id}', "update");
    Route::delete('/posts/{id}', "destroy");
});
