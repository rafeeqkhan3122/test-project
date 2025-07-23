<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

//  one to one relationship
Route::get('oneToOne', [SellerController::class, 'list']);
//    one to many relationship
Route::get('oneToMany', [SellerController::class, 'manyRel']);
//    many to one relationship
Route::get('manyToOne', [SellerController::class, 'manyToOne']);

Route::get('/', function () {
    return view('index');
});
Route::get('/user', [UserController::class, 'user']);
Route::get('/index', [UserController::class, 'index']);
// Route::view('user-form', 'user-form');
Route::view('user-form', 'user-form');

Route::post('adduser', [UserController::class, 'adduser']);
Route::post('newuser', [UserController::class, 'newuser']);
//   route gropping with prefix
// Route::prefix('student')->group(function () {
//     Route::post('adduser', [UserController::class, 'adduser']);
//     Route::post('newuser', [UserController::class, 'newuser']);
// });
// Route::view('user-form', 'user-form');
Route::view('user-form', 'user-form');

// route grouping with controller;
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'user');
    Route::get('/index', 'index');


    Route::post('adduser', 'adduser');
    Route::post('newuser', 'newuser');
    //   route gropping with prefix
});
Route::get('/students', [StudentController::class, 'students']);
Route::get('/querry', [StudentController::class, 'querry']);
Route::get('/getstudent', [StudentController::class, 'upDate']);
