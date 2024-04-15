<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;


Route::get('mate/v1/ping', fn () => response('Welcome to mate.shaadi.com ( ' . app()->environment() . ' )', 200));

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [ChartController::class, 'index'])->name('dashboard.index');
    Route::get('/charts', [ChartController::class, 'charts'])->name('dashboard.chart1');
});