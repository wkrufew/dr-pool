<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Contact;
use App\Models\Service;
use Livewire\Component;

class EditContacto extends Component
{
    public $persona;

    public $open = false;

    protected $rules = [
        'persona.date' => 'required',
        'persona.price' => 'required',
        'persona.observation' => 'required',
        'persona.service_id' => 'required',
    ];

    public function mount(Contact $persona)
    {
        $this->persona = $persona;
    }

    public function save()
    {

        /* $service = Service::find($this->persona->service_id);
        $service->contacts()->updateExistingPivot($this->persona->id, ['status' => 2]); */

        $this->validate();

        $this->persona->save();
        $this->reset(['open']);
        $this->emit('render');
  
    }

    public function render()
    {
        return view('livewire.instructor.edit-contacto');
    }

    
}
