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
    return view('dashboard');
});

Route::get('posts', \App\Http\Livewire\Post\Index::class);
Route::get('/posts/{id}', \App\Http\Livewire\Post\Show::class);

Route::get('search-users', function (){
    return view('search-users');
});

Route::get('counter', function (){
    return view('counter');
});

Route::get('todos', function (){
    return view('todos');
});
