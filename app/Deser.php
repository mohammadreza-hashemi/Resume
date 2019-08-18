<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;

class Deser extends Model
{
  public function food(){
      return $this->belongsTo(Food::class);
  }
}
