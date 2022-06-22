<?php

use App\Http\Controllers\DayCountController;

Route::group(
    ['prefix' => 'count'],
    function () {
        Route::get('/get-counts', [DayCountController::class, 'index']);
    }
);
