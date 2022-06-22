<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DayCount;
use Illuminate\Http\Response;
use App\Services\DayCountService;

class DayCountController extends Controller
{
    /**
     * This method fetches all counts from the day_counts table.
     *
     * @return Illuminate\Http\Response //response returned which include the status code and all day_counts
     */
    public function index(): Response
    {
        $allCounts = app(DayCountService::class)->getAllDayCounts();
        return response([ 'counts' => $allCounts ], 200);
    }
}
