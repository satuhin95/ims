<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
       protected $fillable = [
        'emp_id', 'date', 'year','edit_date', 'status', 'month',
    ];
}
