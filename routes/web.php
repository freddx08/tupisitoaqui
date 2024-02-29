<?php



use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowApartamentos;
use App\Livewire\SearchResultsApartamentos;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('homepage');

Route::get('apartamentos', [ShowApartamentos::class, 'render'])
    ->name('apartamentos.index');

Route::get('apartamentos/{id}', [ShowApartamentos::class, 'detail'])
    ->name('apartamentos.mostrar');

Route::get('busqueda', [SearchController::class, 'index'])
    ->name('search.index');

Route::post('busqueda/resultados', [SearchController::class, 'store'])
    ->name('search.store');

Route::middleware([])->get('apartamentos', ShowApartamentos::class)->name('apartamentos.index');
