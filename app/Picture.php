<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
  protected $fillable = [
    'user_id', 'title', 'image'
  ];

  public function getDaterAttribute()
  {
    return date_format($this->created_at, 'd M Y');
  }
}
