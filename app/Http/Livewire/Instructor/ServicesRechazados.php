<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Contact;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesRechazados extends Component
{
    use WithPagination; 

    public $service, $search;

    public $open = false;

    protected $listeners = [
        'render' => 'render'
    ];


    public function mount(Service $service)
    {
        $this->service = $service;

        //$this->authorize('dicatated',$course);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $personas = $this->service->contacts()->where('name', 'LIKE', '%' . $this->search . '%')
                                                ->where('contact_service.status', 2)
                                                ->latest()->paginate(6);
        return view('livewire.instructor.services-rechazados',compact('personas'))->layout('layouts.instructor');
    }
    public function baja(Contact $contac)
    {
       
        $this->service->contacts()->updateExistingPivot($contac->id, ['status' => 1]);
  
    }

}
