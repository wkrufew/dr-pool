<?php

namespace App\Http\Livewire;

use App\Mail\FormularioContact;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Formulario2Componente extends Component
{
    use WithFileUploads;

    public $name, $phone, $email, $ubication, $material, $sustancia, $galon, $description,$file1,$file2,$service_id,$day;
    public $services;
    public $serviceTite;

    protected $rules = [
        'name'=> 'required|regex:/^[\pL\s\-]+$/u',
        'phone' => 'required|numeric|min:10',
        'email' => 'required|email',
        'ubication' => 'required',
        'material' => 'required',
        'sustancia' => 'required',
        'service_id' => 'required',
        'day' => 'required|min:5',
    ];

    protected $messages = [
        
        'ubication.required' => 'The address field is required.',
        'sustancia.required' => 'The chemistry field is required.',
        'service_id.required' => 'The service field is required.',
        'day.required' => 'The ZIP CODE field is required.',
        'day.min' => 'The ZIP CODE must be at least 5 characters.'
    ]; 

    public function mount()
    {
        $this->services = [];

        if (Auth::check()) {
            $this->name = auth()->user()->name;
            $this->email = auth()->user()->email;
        }
    }

    public function render()
    {
        $this->services = Service::select('id','title')->where('status', 2)->get();
        return view('livewire.formulario2-componente');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'regex:/^[\pL\s\-]+$/u|min:10',
            'phone' => 'min:10|max:13',
            'email' => 'email',  
        ]);
    }
    
    public function save()
    {
        $this->validate();
        try{
           
            if ($this->file1) {
                $file1 = $this->file1->store('contacts');
            } else {
                $file1 = "";
            }

            if ($this->file2) {
                $file2 = $this->file2->store('contacts');
            } else {
                $file2 = "";
            }
        $mensaje =  Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'ubication' => $this->ubication,
            'service_id' => $this->service_id,
            'service_name' => $this->serviceTite,
            'material' => $this->material,
            'sustancia' => $this->sustancia,
            'galon' => $this->galon,
            'description' => $this->description,
            'day' => $this->day,
            'image1' => $file1,
            'image2' => $file2,
        ]); 
        //aqui se van enviar los correos
        Mail::to($this->email)
              ->cc('admin@dr-pools.com')
              ->send(new FormularioContact($mensaje));

       // fin del envio de correos
        $this->reset('name', 'phone', 'email', 'ubication', 'material','sustancia', 'galon', 'description','file1','file2','services','serviceTite','service_id','day');
        session()->flash('mensaje', 'exito');
        
        return redirect()->to('/');

        } catch (\Exception $e) {
            session()->flash('errores', 'error, try again');
        }
        return redirect()->back();
    }
   
}
