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

Route::get('/contact', [PageController::class, 'contactForm']);
Route::get('/mon-espace', [PageController::class, 'mySpace']);
Route::get('/creer-annonce', [PageController::class, 'createOfferForm']);
Route::get('/postuler', [PageController::class, 'applyOfferForm']);
Route::get('/boite-outils', [PageController::class, 'toolBox']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/confirmation', [PageController::class, 'confirmation']);
Route::get('/jobibox', [PageController::class, 'jobibox']);
Route::get('/recherche', [PageController::class, 'recherche']);

Route::post('/set-offer', [AnnonceController::class, 'setAnnonce']);

