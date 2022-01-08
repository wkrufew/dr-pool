<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

use Livewire\WithPagination;

class ServicesIndex extends Component
{
    use WithPagination;

    public function render()
    {
        
        $services = Service::where('status', '2')
                            ->with(['image','goals'])
                            ->paginate(6);

        return view('livewire.services-index', compact('services')); 
    }
}
