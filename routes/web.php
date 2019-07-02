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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'orm'], function (){

    // One-One Relationship
   Route::get('hasOne', function (){
      $data = \App\Lock::with('key')->get()->toArray();

      echo "<pre>";
      print_r($data);
      echo "</pre>";
   });

   // One-To-Many
    Route::get('onetoMany', function (){
        $data = \App\Post::with('comments')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    });

    Route::get('manytoOne', function (){
       $data = \App\Comment::with('post')->get()->toArray();

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    });
});