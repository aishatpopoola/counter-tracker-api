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

    /**
     * This method adds a new count to the day_counts table.
     *
     * @return Illuminate\Http\Response //response returned which include the status code and
     * current count added
     */
    public function add(Request $request): Response
    {
        $rules = array(
            'counter' => ['required', 'integer', 'min:1'],
        );

        $data = request()->validate($rules);
        $dayCountResult = app(DayCountService::class)->addNewDayCount($data);
        
        return response($dayCountResult, 200);
    }
}
