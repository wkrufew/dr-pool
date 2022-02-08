<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicioPortada extends Component
{
    public $services = [];
 
    public function loadService()
    {
        $this->services = cache()->remember('services', 60*60*24, function () {
            return Service::select(['id','logo','title','slug'])->where('status', '2')
            ->with(['image'])
            ->take(8)
            ->get();
        });
    }
    
    public function render()
    {
        return view('livewire.servicio-portada');
    }
}
