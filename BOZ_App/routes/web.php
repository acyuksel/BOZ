<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;

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
    return view('index');
})->name('home');

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');

    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project-create', [ProjectController::class, 'create'])->name('project-create');
    Route::post('/project-create', [ProjectController::class, 'store'])->name('project-create');
    Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->name('project-edit');
    Route::post('/project-edit/{id}', [ProjectController::class, 'update'])->name('project-edit');
});

require __DIR__.'/auth.php';
