<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Goal;
use App\Models\Service;
use Livewire\Component;

class ServicesGoals extends Component
{
    public $service, $goal, $name;

    protected $rules = [
        'goal.name' => 'required'
    ];

    protected $messages = [
        'goal.name.required' => 'El campo es requerido por favor ingresa un nombre'
    ];

    public function mount(Service $service)
    {
        $this->service = $service;

        $this->goal = new Goal();
    }
    public function render()
    {
        return view('livewire.instructor.services-goals');
    }

    public function store()
    {
        $rules = [
            'name' => 'required'
        ];
        $messages =[
            'name.required' => 'Este campo es requerido por favor ingresa un nombre',
        ];

        $this->validate($rules, $messages);
        
        $this->service->goals()->create([
            'name' => $this->name
        ]);

        $this->reset('name');

        $this->service = Service::find($this->service->id);

    }

    public function edit(Goal $goal)
    {
        $this->goal = $goal;
    }

    public function update()
    {
        $this->validate();

        $this->goal->save();

        $this->goal = new Goal();

        $this->service = Service::find($this->service->id);
    }

    public function destroy(Goal $goal)
    {
        $goal->delete();

        $this->service = Service::find($this->service->id);
    }
}
