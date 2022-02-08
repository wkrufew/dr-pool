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
        $services = Service::select(['id','logo','title','slug','description'])->where('status', '2')
                            ->with(['image'])
                            ->paginate(6);
        return view('livewire.services-index', compact('services')); 
    }
}
