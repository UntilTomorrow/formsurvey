<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SendSurveyController;
use App\Http\Controllers\InputSurveyController;


Route::middleware(['web'])->group(function () {
    Route::get('/login', [LoginController::class, 'showformlogin'])->name('login');
    Route::post('/login', [LoginController::class, 'authlogin'])->name('authlogin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [Dashboard::class, 'showdashboard'])->name('dashboard');
    Route::post('/dashboard', [Dashboard::class, 'create'])->name('create');
    Route::get('/listsurvey', [SendSurveyController::class, 'showlistsurvey'])->name('listsurvey');
    Route::post('/listsurvey/search', [SendSurveyController::class, 'showlistsurvey'])->name('search.listsurvey');
    Route::get('/input', [InputSurveyController::class, 'showforminput'])->name('input');
    Route::post('/input', [InputSurveyController::class, 'inputform'])->name('inputform');
});


Route::middleware(['web'])->group(function () {
Route::get('/new-survey-form/{url}', [SurveyController::class, 'formsurvey'])->name('new-survey-form');
Route::post('/new-survey-form/{url}', [SurveyController::class, 'submitform'])->name('submit-survey');

});

Route::get('/thanks-for-survey', [ThanksController::class, 'showthanks'])->name('thanks');
Route::get('/sorry-for-inconvenient', [ThanksController::class, 'showsorry'])->name('sorry');

