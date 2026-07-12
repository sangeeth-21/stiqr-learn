<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/onboarding', [AuthController::class, 'showOnboarding']);
Route::post('/onboarding', [AuthController::class, 'saveOnboarding']);
Route::get('/onboarding/skip', [AuthController::class, 'skipOnboarding']);

Route::get('/dashboard', [AuthController::class, 'showDashboard']);

Route::get('/courses', [AuthController::class, 'showCourses']);
Route::get('/progress', [AuthController::class, 'showProgress']);
Route::get('/certificates', [AuthController::class, 'showCertificates']);
Route::get('/settings', [AuthController::class, 'showSettings']);

Route::get('/logout', [AuthController::class, 'logout']);
