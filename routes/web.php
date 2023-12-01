<?php

use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

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
    return view('welcome');
});

#######################################
Route::get('food', function () {
    return view('food');
});
#######################################

Route::prefix('lar')->group(function(){

    Route::get('/', function () {
        return view('test');
    });

    Route::get('test', function(){
        return "Welcome to my first project in laravel";
    });
    
    Route::get('test1/{id}', function($id){
        return "the ID is: " .$id ;
    });
    
    Route::get('test2/{id?}', function($id = 0){
        return "the ID 2 is:" .$id ;
    })->where(['id' => '[0-9]+']);
    
    Route::get('test3/{id?}', function($id = 0){
        return "the ID 2 is: " .$id ;
    })->whereNumber('id');
    
    Route::get('test4/{name?}/{age?}', function($name=null, $age=0){
        return "my name is: " . $name ."<br>" . " the age is: " . $age;
    })->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+' ]) ;
    
    Route::get('test5/{name?}', function($name = null){
        return "my name is " . $name;
    })-> whereAlpha('name');
    
    Route::get('product/{category?}', function($cat){
        return "the category is: " . $cat;
    })->whereIn('category', ['laptop','pc', 'mobile']);
});

/**
 * Route::fallback(function(){
 * return "Sorry page not found!";
 * //return redirect('/');
 * });
**/

Route::prefix('blog')->group(function(){
    Route::get('science', function(){
        return view('science');
    });

    Route::get('sports', function(){
        return view('sports');
    });

    Route::get('math', function(){
        return view('math');
    });

    Route::get('medical', function(){
        return view('medical');
    });
});

Route::get('about', function(){
    return view('about') ;
});

Route::get('contactus', function(){
    return view('contact');
});
