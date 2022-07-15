<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumPesmaController;
use App\Http\Controllers\IzvodjacController;
use App\Http\Controllers\PesmaController;
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



Route::get('/pesmas', [PesmaController::class, 'index']);
Route::get('/pesmas/{id}', [PesmaController::class, 'show']);

Route::get('/izvodjacs', [IzvodjacController::class, 'index']);
Route::get('/izvodjacs/{id}', [IzvodjacController::class, 'show']);


Route::get('/albums', [AlbumController::class, 'index']);
Route::get('/albums/{id}', [AlbumController::class, 'show']);

Route::resource('pesmas', PesmaController::class);
Route::resource('izvodjacs', IzvodjacController::class);
Route::resource('albums', AlbumController::class);





Route::resource('albums.pesmas', AlbumPesmaController::class)->only(['index']);
//Route::get('/albums/{id}/pesmas', [AlbumPesmaController::class, 'index'])->name('albums.pesmas.index');