<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/hello', function () {
    return Inertia::render('helloworld');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

Route::get('/hello', [App\Http\Controllers\DemoController::class, 'RenderHello']);

Route::post('/add-student', [App\Http\Controllers\DemoController::class, 'addstudent']);
