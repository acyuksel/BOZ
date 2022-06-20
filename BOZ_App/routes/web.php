<?php

use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Visitor\AboutUsController;
use App\Http\Controllers\Visitor\PolicyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Visitor\ContactController;
use App\Http\Controllers\Admin\RecommendationController;
use App\Http\Controllers\Admin\PartnerController;

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

Route::get('/recommendations', [App\Http\Controllers\Visitor\RecommendationController::class, 'index'])->name('recommendations');

Route::get('/partners', [App\Http\Controllers\Visitor\PartnersController::class, 'index'])->name('partners');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.visitor.index');
Route::post('/contact', [ContactController::class, 'storeAndSendContactForm'])->name('contact.visitor.store&send');
Route::get('/contact/{location}', [ContactController::class, 'cta'])->name('cta');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.visitor.index');

Route::get('/policy', [PolicyController::class, 'index'])->name('policy.visitor.index');
Route::get('/privacy', [App\Http\Controllers\Visitor\PrivacyController::class, 'index'])->name('privacy_declaration.visitor.index');

Route::get('/projects', [App\Http\Controllers\Visitor\ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{project:id}', [App\Http\Controllers\Visitor\ProjectController::class, 'detail'])->name('project-detail');



Route::prefix('cms')->middleware(['auth'])->group(function () {
    Route::post('/', [HomeController::class, 'addSection'])->name('add-section');
    Route::patch('/', [HomeController::class, 'updateSection'])->name('update-section');
    Route::delete('/', [HomeController::class, 'deleteSection'])->name('delete-section');

    Route::post('/about-us', [AboutUsController::class, 'update'])->name('update-about-us');
    Route::post('/policy', [PolicyController::class, 'update'])->name('update-policy');
    Route::post('/privacy', [App\Http\Controllers\Visitor\PrivacyController::class, 'update'])->name('update-privacy');

    Route::get('/', [ProjectController::class, 'index']);

    Route::resource('/contact', AdminContactController::class)->only(['index', 'show','destroy']);

    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('/project-create', [ProjectController::class, 'create'])->name('project-create');
    Route::post('/project-create', [ProjectController::class, 'store'])->name('project-create');
    Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->name('project-edit');
    Route::get('/project-medium-remove/{projectId}/{mediumId}', [ProjectController::class, 'removeMediaFromProject'])->name('project-media-remove');
    Route::post('/project-edit/{id}', [ProjectController::class, 'update'])->name('project-edit');
    Route::post('/project-delete/{id}', [ProjectController::class, 'destroy'])->name('project-delete');

    Route::get('/recommendation', [RecommendationController::class, 'index'])->name('recommendation');
    Route::get('/recommendation-create', [RecommendationController::class, 'create'])->name('recommendation-create');
    Route::post('/recommendation-create', [RecommendationController::class, 'store'])->name('recommendation-create');
    Route::get('/recommendation-edit/{id}', [RecommendationController::class, 'edit'])->name('recommendation-edit');
    Route::post('/recommendation-edit/{id}', [RecommendationController::class, 'update'])->name('recommendation-edit');
    Route::post('/recommendation-delete/{id}', [RecommendationController::class, 'destroy'])->name('recommendation-delete');

    Route::get('/partner', [PartnerController::class, 'index'])->name('partner');
    Route::get('/partner-create', [PartnerController::class, 'create'])->name('partner-create');
    Route::post('/partner-create', [PartnerController::class, 'store'])->name('partner-create');
    Route::get('/partner-edit/{id}', [PartnerController::class, 'edit'])->name('partner-edit');
    Route::post('/partner-edit/{id}', [PartnerController::class, 'update'])->name('partner-edit');
    Route::post('/partner-delete/{id}', [PartnerController::class, 'destroy'])->name('partner-delete');
});

// Route::get('/media', function () {
//     return view('admin.media-library');
// })->middleware(['auth'])->name('media');

Route::post('/language', LocalizationController::class)->name('set-lang');
require __DIR__ . '/auth.php';
