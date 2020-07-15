<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [ 'nik', 'name', 'birthdate', 'gender', 'phone', 'email', 'position_id', 'user_id', 'address'];

    public function position()
    {
    	return $this->belongsTo('App\Position');
    }

    public function attendances()
    {
    	return $this->hasMany('App\Attendance');
    }
}
