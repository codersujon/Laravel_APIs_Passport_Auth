<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthorController;
use Laravel\Passport\Http\Controllers\AccessTokenController;

/**
 * AUTHOR API ROUTES
 */
Route::prefix('author')->controller(AuthorController::class)->group(function(){
    
    // Public Routes
    Route::post('register', 'register');
    Route::post('login', 'login');
    
    // Protected Routes
    Route::middleware(["auth:api"])->group(function(){
        Route::get('profile', 'profile');
        Route::post('logout', 'logout'); // POST is better for logout
    });

});


/**
 * BOOK API ROUTES PROTECTED
 */
Route::prefix('books')->middleware('auth:api')->controller(BookController::class)->group(function(){
    Route::post('add-book', 'saveBook'); // POST /books
    Route::get('list-book', 'listBooks'); // GET /books
    Route::get('delete-book/{id}', 'deleteBook'); // DELETE /books/{id}
});

