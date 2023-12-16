<?php

use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CarController;

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

// @if($row->published)Yes@elseNo@endif

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

Route::get('login', function(){
    return view('login');
});

Route::post('logged', function(){
    return "you logged successfully!";
})->name('logged');

Route::get('control', [ExampleController::class, 'show']);

//insert car data 
Route::get('createCar', [CarController::class, 'create'])->name('createCar');
Route::post('storeCar', [CarController::class, 'store'])->name('storeCar');

//show data in database
Route::get('Car', [CarController::class, 'index'])->name('Car');
Route::post('showCar', [CarController::class, ])->name('showCar');

//update car data
Route::get('eidtCar/{id}', [CarController::class, 'edit'])->name('eidtCar');
Route::put('update/{id}', [CarController::class, 'update'])->name('update');

//show car details
Route::get('showCar/{id}', [CarController::class, 'show'])->name('showCar');

//delete car data using soft delete
Route::get('deleteCar/{id}', [CarController::class, 'destroy'])->name('deleteCar');

//show deleted cars
Route::get('trashed', [CarController::class, 'trashed'])->name('trashed');

//delete cars permenantly from database using force delete
Route::get('forceDelete/{id}', [CarController::class, 'forceDelete'])->name('forceDelete');

//restore deleted data
Route::get('restore/{id}', [CarController::class, 'restore'])->name('restore');