<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// Route::middleware(['auth:api'])->group(function () {
//     Route::apiResource('/transactions', TransactionController::class)->only(['index', 'store', 'show']);
// });

// Route::middleware(['auth:api', 'role:admin'])->group(function () {
//     Route::apiResource('/transactions', TransactionController::class)->only(['update', 'destroy']);
// });

// Route::apiResource('/books', BookController::class)->only(['index', 'show']);
// Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
// Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);

// Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
// Route::apiResource('/authors', AuthorController::class)->only(['store', 'update', 'destroy']);
// Route::apiResource('/genres', GenreController::class)->only(['store', 'update', 'destroy']);


// 🔐 Route auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

// 🔍 Public access (no login)
Route::apiResource('/books', BookController::class)->only(['index', 'show']);
Route::get('/genres',        [GenreController::class, 'index']);
Route::get('/genres/{id}',   [GenreController::class, 'show']);
Route::get('/authors',       [AuthorController::class, 'index']);
Route::get('/authors/{id}',  [AuthorController::class, 'show']);

// 🔐 User authenticated (customer)
Route::middleware(['auth:api'])->group(function () {
    Route::post('/logout',   [AuthController::class, 'logout']);

    Route::post('/transactions', [TransactionController::class, 'store']);  // ✅ Buat transaksi
    Route::get('/transactions/{id}', [TransactionController::class, 'show']); // ✅ Lihat transaksi pribadi
});

// 🔐 Admin only (dengan middleware admin)
Route::middleware(['auth:api', 'admin'])->group(function () {
    // ✅ Admin akses semua transaksi (lihat semua, edit, hapus)
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::put('/transactions/{id}', [TransactionController::class, 'update']);
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']);

    // ✅ Admin CRUD buku
    Route::post('/books',   [BookController::class, 'store']);
    Route::put('/books/{id}',   [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);

    // ✅ Admin CRUD genre
    Route::post('/genres',  [GenreController::class, 'store']);
    Route::put('/genres/{id}', [GenreController::class, 'update']);
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']);

    // ✅ Admin CRUD author
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{id}', [AuthorController::class, 'update']);
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']);
});
