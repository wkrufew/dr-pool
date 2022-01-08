<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Contact;
use Livewire\Component;

class ShowContacto extends Component
{
    public $persona, $description;
    public $open = false;

    public function mount(Contact $persona)
    {
        $this->persona = $persona;
        $this->description = $persona->description;
    }
    
    public function render()
    {
        return view('livewire.instructor.show-contacto');
    }
}
