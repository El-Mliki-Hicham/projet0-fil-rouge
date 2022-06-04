<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExercicesController;
use App\Http\Controllers\JoursController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });
 
// Route::get('/inserte-exercice ', function () {
//     return view('pages.inserte-exercice');
// });
// Route::get('/inserte-categorie ', function () {
//     return view('pages.inserte-categorie');
// });
// Route::get('/edit-exercice ', function () {
//     return view('pages.edit-exercice');
// });
// Route::get('/edit-categorie ', function () {
//     return view('pages.edit-categorie');
// });
// Route::get('/tableau-exercice ', function () {
//     return view('pages.tableau-exercice');
// });
// Route::get('/tableau-categorie ', function () {
//     return view('pages.tableau-categorie');
// });

// route::resource("admin",Controller::class);
 route::resource("afficher-categorie",CategoriesController::class);
// route::resource("exercice",ExercicesController::class);
// route::resource("jour",JoursController::class);
