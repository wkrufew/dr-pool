<?php

namespace App\Http\Livewire\Instructor;

use App\Mail\FinalizadoContact;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesPersonas extends Component
{
    //use AuthorizesRequests;

    use WithPagination; 

    public $service, $search;

    public $open = false;

    protected $listeners = [
        'render' => 'render'
    ];

    public $date, $day, $observation, $price;

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
                                                ->where('contact_service.status', 1)
                                                ->latest()->paginate(6);
        return view('livewire.instructor.services-personas',compact('personas'))->layout('layouts.instructor');
    }

    public function sube(Contact $contac)
    {
        //aqui se van enviar los correos
        try {
            Mail::to($contac->email)
                ->cc('admin@dr-pools.com')
                ->send(new FinalizadoContact($contac));
        // fin del envio de correos
                $this->service->contacts()->updateExistingPivot($contac->id, ['status' => 2]);
                $this->emit('render');
        } catch (\Exception $e) {
            session()->flash('errores', 'Ocurrio un error, intentalo nuevamente');
        }
        return redirect()->back();
    }

}
