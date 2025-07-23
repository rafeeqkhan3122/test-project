<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\SellerController;

use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signup']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('SellerAPI', [SellerController::class, 'sellerList']);
//     Route::post('addStudent', [SellerController::class, 'addStudent']);
//     Route::put('updateStudent/{id}', [SellerController::class, 'updateStudent']);
//     Route::delete('deleteStudent/{id}', [SellerController::class, 'deleteStudent']);
//     Route::get('searchStudent/{name}', [SellerController::class, 'searchStudent']);
// });

//  <------- we also code like this below we make group of route with Controller--------->

Route::controller(SellerController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('SellerAPI', 'sellerList');
    Route::post('addStudent', 'addStudent');
    Route::put('updateStudent/{id}', 'updateStudent');
    Route::delete('deleteStudent/{id}', 'deleteStudent');
    Route::get('searchStudent/{name}', 'searchStudent');
});

Route::post('login', [AuthController::class, 'login'])->name('login');



Route::get('postList', [SellerController::class, 'postList']);
