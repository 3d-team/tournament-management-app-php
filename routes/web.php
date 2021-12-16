<?php
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group([
    'prefix' => 'tournaments',
    'as' => 'tournaments.'
], function() {
    Route::get('/create', [\App\Http\Controllers\TournamentController::class, 'create'])->name('create');
    Route::get('/manage', [\App\Http\Controllers\TournamentController::class, 'manage'])->name('manage');
    Route::get('/register', [\App\Http\Controllers\TournamentController::class, 'register'])->name('register');
    Route::get('/schedule', [\App\Http\Controllers\TournamentController::class, 'schedule'])->name('schedule');
    Route::get('/matches', [\App\Http\Controllers\TournamentController::class, 'matches'])->name('matches');
    Route::get('/report', [\App\Http\Controllers\TournamentController::class, 'report'])->name('report');
    Route::get('/rule', [\App\Http\Controllers\TournamentController::class, 'rule'])->name('rule');
});

Route::group([
    'prefix' => 'players',
    'as' => 'players.'
], function() {
    Route::get('/', [\App\Http\Controllers\PlayerController::class, 'index'])->name('index');
    Route::post('/add', [\App\Http\Controllers\PlayerController::class, 'add'])->name('add');
    Route::post('/upload', [\App\Http\Controllers\PlayerController::class, 'upload'])->name('upload');
});
