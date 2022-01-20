<?php

namespace App\Http\Livewire;

use App\Models\Slider;
use Livewire\Component;

class SliderPortada extends Component
{
    public $sliders = [];
 
    public function loadSlider()
    {
        $this->sliders = cache()->remember('welcome', 60*60*24, function () {
            return Slider::select('name', 'foto')->orderBy('name','asc')->get();
        });

        $this->emit('swiper');
    }
    public function render()
    {
        return view('livewire.slider-portada');
    }
}
