<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AnnonceController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/catalogue', [PageController::class, 'catalogue']);
Route::get('/annonce', [PageController::class, 'offer']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/profil', [PageController::class, 'profile']);
Route::get('/creer-annonce', [PageController::class, 'createOffer']);

Route::post('/create-offer', [AnnonceController::class, 'createAnnonce']);

