<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id','status'];

    //Relacion mucho a muchos
    public function services()
    {
        $this->belongsToMany('App\Models\Service');
    }
}
