<?php

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','guest']
    ], function(){ 


       
Route::get('/', function () {
    return view('pages.index');
});


Auth::routes();


    });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth']
    ], function(){ 


       

Route::get('/home', \App\Http\livewire\Blog\Home::class)->name('home');

Route::get('/posts', \App\Http\livewire\Blog\ShowBlogs::class)->name('posts');
//Route::get('/post/{id}', \App\Http\livewire\Blog\Blogs::class)->name('post');

//Route::get('/Edit_post/{id}', \App\Http\livewire\Blog\EditBlog::class)->name('edit_post');
Route::get('/create_post', \App\Http\livewire\Blog\CreateBlog::class)->name('create_post');



    });

