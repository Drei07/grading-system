<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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

// routes/web.php

// Route to display the search form

Route::get('/', [SearchController::class, 'showForm'])->name('index');
Route::post('/result', [SearchController::class, 'processForm'])->name('processForm');
Route::get('/result', [SearchController::class, 'showResult'])->name('result'); // Add this line
