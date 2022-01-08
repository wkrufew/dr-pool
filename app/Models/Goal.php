<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    //relacion de uno a muchos inversa
    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
