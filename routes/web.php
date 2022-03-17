<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;

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

//Route::resource('posts','\App\Http\Controllers\PostController');

Route::get('contact','\App\Http\Controllers\PostController@contact');

Route::get('/insert/{title}/{name}','\App\Http\Controllers\PostController@insert');

Route::get('/read','\App\Http\Controllers\PostController@read');

Route::get('/update/{id}/{title}','\App\Http\Controllers\PostController@updatee');

Route::get('/delete/{title}','\App\Http\Controllers\PostController@deletee');

Route::get('/find','\App\Http\Controllers\PostController@find');

Route::get('/binsert2/{id}','\App\Http\Controllers\PostController@binsert2');
Route::get('/createM','\App\Http\Controllers\PostController@createM');
Route::get('/updateM','\App\Http\Controllers\PostController@updateM');
Route::get('/delete1','\App\Http\Controllers\PostController@delete1');
Route::get('/user/{id}/post','\App\Http\Controllers\PostController@oneToOne');




Route::get('posts/{id}/{name}','\App\Http\Controllers\PostController@show_post');



    
//Route::get('/posts/{id}', '\App\Http\Controllers\PostController');


// Route::get('/about', function () {
//     return 'about';
// });

// Route::get('/contact', function () {
//     return 'welcome';
// });

// Route::get('/posts/{id}/{name}', function ($id,$name) {
//     return 'Post number '. $id. " ". $name;
// });

Route::get('/user/{id}/post',function($id){
     $post = User::find($id)->post;
     return User::find($id)->post->content;
    });

    Route::get('/post/{id}/user',function($id){
        
        return Post::find($id)->user->name;
       });