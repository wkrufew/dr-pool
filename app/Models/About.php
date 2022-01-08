<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title', 'image', 'car1', 'car2', 'car3', 'mision','vision'
    ];

    use HasFactory;
}
