<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['clocked_in_time', 'clocked_out_time', 'status_clock_in', 'status_clock_out'];
}
