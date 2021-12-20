<?php

use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;
use App\Http\Controllers\RecettesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
Route::get('/', [RecettesController::class, 'allRecepies']);
Route::get('/recettes/{id}', [RecettesController::class, 'RecetteById']);
Route::get('/pageUtilisateur/acceuil',[UserController::class, 'user'])->middleware(['auth']);
Route::get('/pageUtilisateur/ajouterRecette',[RecettesController::class, 'formAddRecette'])->middleware(['auth']);

Route::get('/admin', [AdminController::class, 'admin'])->middleware(['auth']);

Route::post('/pageUtilisateur/ajouterRecette/show', [RecettesController::class, 'addRecette'])->middleware(['auth']);


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => 'auth'], function () {
    Lfm::routes();
});