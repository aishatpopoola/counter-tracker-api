<?php

namespace App\Services;

use App\DayCount;
use Illuminate\Database\Eloquent\Model;

class DayCountService
{
    public function getAllDayCounts()
    {
        // please note that this code is just a validator to remove the 'true' status from counts from -
        // all previous days. with the way the codebase is structured it will most likely always return -
        // one data from previous day if this function is called the first time in current day -
        // filtering through the $allCounts above to validate this would be catastrophic if we are getting -
        // a large data -- say we curently have over a million or two day_counts
        $lastCount = DayCount::where('status', '=', true)->where('day', '!=', today())->first();

        if ($lastCount) {
            $lastCount->status = false;
            $lastCount->save();
        }
        $allCounts = DayCount::orderBy('day')->get();
        return $allCounts;
    }
}