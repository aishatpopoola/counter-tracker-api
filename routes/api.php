<?php

use App\Http\Controllers\DayCountController;

Route::group(
    ['prefix' => 'count'],
    function () {
        Route::get('/get-counts', [DayCountController::class, 'index']);
        Route::post('/add-count', [DayCountController::class, 'add']);
    }
);
