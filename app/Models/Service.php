<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];

    protected $withCount = ['contacts' , 'reviews'];

    const BORRADOR = 1;
    const PUBLICADO = 2;

    public function getRouteKeyName()
    {
        return "slug";   
    }

    public function getRatingAttribute()
    {
        if($this->reviews_count)
        {
            return round($this->reviews->avg('rating'),1);
        }else{
            return 5;
        }
         
    }
    //relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }
    //realcion uno a muchos inversa 
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //relacion de uno a muchos inversa
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    //relacion de muchos a muchos       ->withPivot('cantidad', 'precio');
    public function contacts()
    {
        return $this->belongsToMany('App\Models\Contact')->withTimestamps()->withPivot('status');
    }

    //relacion uno a uno polimorfica

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }


}
