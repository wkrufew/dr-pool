<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicioPortada extends Component
{
    public $services = [];
 
    public function loadService()
    {
        /* $this->sliders = cache()->remember('welcome', 60*60*24, function () {
            return Slider::select('name', 'foto')->orderBy('name','asc')->get();
        }); */

        $this->services = cache()->remember('services', 60*60*24, function () {
            return Service::where('status', '2')
            ->with(['image','goals'])
            ->take(8)->get();
        });

        //$this->emit('swiper');
    }
    public function render()
    {
        return view('livewire.servicio-portada');
    }
}
