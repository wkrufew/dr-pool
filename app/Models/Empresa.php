<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'name', 'propietario', 'pais_ciudad', 'calles', 'dias', 'dias', 'horas', 'telefono1', 'telefono1', 
        'telefono1', 'telefono2', 'correo', 'facebook', 'instagram', 'whatsapp', 'foto', 'detalle'
    ];
    use HasFactory;
}
