<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayCount extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'day',
    ];

    public function getDayAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->isoFormat('MMMM Do YYYY');
    }
}
