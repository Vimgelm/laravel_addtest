<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TestController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('test',function (){
    return view('test');
});

Route::get('test/create/', [TestController::class, 'actionIndex']);
Route::post('test/store', [TestController::class, 'storeTest']);
Route::get('test/pass/{id}', [TestController::class, 'passTest']);
Route::post('test/pass/save', [TestController::class, 'saveAnswers']);

Route::get('mytest', [TestController::class, 'getTest']); //for test
