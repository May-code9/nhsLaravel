<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
  protected $fillable = [
    'user_id', 'title', 'pdf'
  ];

  public function getDaterAttribute()
  {
    return date_format($this->created_at, 'd M Y');
  }
}
