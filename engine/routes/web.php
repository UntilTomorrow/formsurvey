<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ThanksController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SendSurveyController;


Route::middleware(['web'])->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'showdashboard'])->name('dashboard');
    Route::post('/dashboard', [Dashboard::class, 'create'])->name('create');
});

Route::middleware(['web'])->group(function () {
    Route::get('/listsurvey', [SendSurveyController::class, 'showlistsurvey'])->name('listsurvey');
    Route::post('/listsurvey/search', [SendSurveyController::class, 'showlistsurvey'])->name('search.listsurvey');
});



Route::middleware(['web'])->group(function () {
Route::get('/login', [LoginController::class, 'showformlogin'])->name('login');
Route::post('/login', [LoginController::class, 'authlogin']);

});

Route::middleware(['web'])->group(function () {
Route::get('/new-survey-form/{url}', [SurveyController::class, 'formsurvey'])->name('new-survey-form');
Route::post('/new-survey-form/{url}', [SurveyController::class, 'submitform'])->name('submit-survey');

});

Route::get('/thanks-for-survey', [ThanksController::class, 'showthanks'])->name('thanks');
Route::get('/sorry-for-inconvenient', [ThanksController::class, 'showsorry'])->name('sorry');

