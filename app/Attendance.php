<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
      'user_id', 'hall_id', 'day'
    ];
}
