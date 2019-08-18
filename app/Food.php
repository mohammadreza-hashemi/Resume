<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Deser;

class Food extends Model
{
    protected $fillable=[
        'name',
        'price',
        'deser_id',
    ];
    
    public function desers(){
        return $this->hasMany(Deser::class);
    }
}
