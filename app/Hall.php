<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
      'user_id', 'hall'
    ];
}
