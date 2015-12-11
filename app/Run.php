<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
  // Relationship with Partners table.
  public function applications(){

    return $this->hasOne('\App\Application');
  }

  // Relationship with Partners table.
  public function environments(){

    return $this->hasOne('\App\Environment');
  }

  // Relationship with Partners table.
  public function partners(){

    return $this->hasOne('\App\Partner');
  }

  // Relationship with Suite table.
  public function suites(){

    return $this->hasMany('\App\Suite');
  }
}
