<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;

use App\Models\Service;

use Livewire\WithPagination;

class ServicesIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {   //para restringir y que solo el due;o de crear el servicio vea solo sus servicios
        //where('user_id', auth()->user()->id)
        $services = Service::where('title', 'LIKE', '%' . $this->search . '%') 
                                ->latest('id')
                                ->paginate(8);
        return view('livewire.instructor.services-index', compact('services'));
    }

    public function limpiar_page()
    {
        $this->reset('page');
    }
}
