<?php

namespace App\View\Components;

use App\Models\Empresa;
use Illuminate\View\Component;

class Prueba extends Component
{
    

    public function __construct()
    {
        
    }

    public function render()
    {
        //$empresa = Empresa::select('telefono1','telefono2','foto','propietario','pais_ciudad','calles','correo','dias','horas','facebook','instagram','whatsapp')->first();
        $empresa = cache()->remember('empresas', 60*60*24, function () {
            return Empresa::select('telefono1','telefono2','foto','propietario','pais_ciudad','calles','correo','dias','horas','facebook','instagram','whatsapp')->first();
        });
        return view('components.prueba',compact('empresa'));
    }
}
