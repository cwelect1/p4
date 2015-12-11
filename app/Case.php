<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
  // Relationship with Status table.
  public function applications(){

    return $this->hasOne('\App\Status');
  }

  // Relationship with Suites table.
  public function suites(){

    return $this->belongsTo('\App\Suite');
  }
}
