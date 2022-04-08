<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\Visitor\ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project:id}', [App\Http\Controllers\Visitor\ProjectController::class, 'detail'])->name('project-detail');

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');

    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project-create', [ProjectController::class, 'create'])->name('project-create');
    Route::post('/project-create', [ProjectController::class, 'store'])->name('project-create');
    Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->name('project-edit');
    Route::post('/project-edit/{id}', [ProjectController::class, 'update'])->name('project-edit');
    Route::post('/project-delete/{id}', [ProjectController::class, 'destroy'])->name('project-delete');
});

Route::get('/media', function () {
    return view('admin.media-library');
})->middleware(['auth'])->name('media');

Route::post('audio-upload', [App\Http\Controllers\Admin\AudioController::class, 'AddAudio'])->name('audio.upload');

require __DIR__.'/auth.php';
