<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

Route::middleware(['auth:api'])->group(function () {
    Route::apiResource('/transactions', TransactionController::class)->only(['index', 'store', 'show']);
});

Route::middleware(['auth:api', 'role:admin'])->group(function () {
    Route::apiResource('/transactions', TransactionController::class)->only(['update', 'destroy']);

    Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
        
    Route::apiResource('/genres', GenreController::class)->only(['store', 'update', 'destroy']);
        
    Route::apiResource('/authors', AuthorController::class)->only(['store', 'update', 'destroy']);
});


Route::apiResource('/books', BookController::class)->only(['index', 'show']);

Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);

Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);







// Route::get('/books', [BookController::class, 'index']);
// Route::post('/books', [BookController::class, 'store']);
// Route::get('/books/{id}', [BookController::class, 'show']);
// Route::post('/books/{id}', [BookController::class, 'update']);
// Route::delete('/books/{id}', [BookController::class, 'destroy']);


// Route::get('/genres', [GenreController::class, 'index']);
// Route::post('/genres', [GenreController::class, 'store']);
// Route::get('/genres/{id}', [GenreController::class, 'show']);
// Route::post('/genres/{id}', [GenreController::class, 'update']);
// Route::delete('/genres/{id}', [GenreController::class, 'destroy']);


// Route::get('/authors', [AuthorController::class, 'index']);
// Route::post('/authors', [AuthorController::class, 'store']);
// Route::get('/authors/{id}', [AuthorController::class, 'show']);
// Route::post('/authors/{id}', [AuthorController::class, 'update']);
// Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);