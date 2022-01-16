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
    {  
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
