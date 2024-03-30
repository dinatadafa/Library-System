<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [SessionController::class, 'index']);
Route::post('/login', [SessionController::class, 'login']);
Route::get('/dashboard', [DashboardController::class, 'index']);
// Use post method with ISBN as a parameter
Route::post('/dashboard/details/{idbuku}', [DashboardController::class, 'details']);
Route::post('/dashboard/details/{idbuku}/edit', [DashboardController::class, 'edit']);
Route::get('/dashboard/create', [DashboardController::class, 'create']);
Route::post('/dashboard/create/store', [DashboardController::class, 'store']);
Route::get('/dashboard/verification', [DashboardController::class, 'verification']);
Route::post('/dashboard/verification/{noktp}', [DashboardController::class, 'member_details']);
Route::post('/dashboard/verification/{id}/verify', [DashboardController::class, 'changeStatus']);
Route::get('/dashboard/history', [DashboardController::class, 'history']);
Route::get('/dashboard/lend', [DashboardController::class, 'lend']);
Route::get('/dashboard/return', [DashboardController::class, 'return']);
Route::post('/dashboard/return/{idtransaksi}', [DashboardController::class, 'confirm']);
Route::post('/dashboard/lend/add', [DashboardController::class, 'add']);
Route::post('/dashboard/details/{idbuku}/delete', [DashboardController::class, 'delete']);
