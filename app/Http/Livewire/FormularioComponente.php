<?php

namespace App\Http\Livewire;

use App\Mail\FormularioContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

use Livewire\WithFileUploads;

class FormularioComponente extends Component
{
    use WithFileUploads;
    public $service;

    public $name, $phone, $email, $ubication, $material, $sustancia, $galon, $description, $status,$file1,$file2,$day; 
    
    protected $rules = [
        'name'=> 'required|regex:/^[\pL\s\-]+$/u',
        'phone' => 'required|numeric|min:10',
        'email' => 'required|email',
        'ubication' => 'required',
        'material' => 'required',
        'sustancia' => 'required',
        'day' => 'required|min:5',
    ];

    protected $messages = [
        
        'ubication.required' => 'The address field is required.',
        'sustancia.required' => 'The chemistry field is required.',
        'day.required' => 'The code field is required.',
        'day.min' => 'The ZIP CODE must be at least 5 characters.'
    ]; 

    public function mount()
    {
        if (Auth::check()) {
            $this->name = auth()->user()->name;
            $this->email = auth()->user()->email;
        }
    }
    public function render()
    {
        return view('livewire.formulario-componente');
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
         try {
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
          
           $mensaje = Contact::create([
               'name' => $this->name,
               'phone' => $this->phone,
               'email' => $this->email,
               'ubication' => $this->ubication,
               'service_id' => $this->service->id,
               'service_name' => $this->service->title,
               'material' => $this->material,
               'sustancia' => $this->sustancia,
               'galon' => $this->galon,
               'day' => $this->day,
               'description' => $this->description,
               'image1' => $file1,
               'image2' => $file2,
           ]); 
           //aqui se van enviar los correos
           Mail::to($this->email)
                 ->cc('admin@dr-pools.com')
                 ->send(new FormularioContact($mensaje));
          // fin del envio de correos
   
           $this->reset('name', 'phone', 'email', 'ubication', 'material','sustancia', 'galon', 'description','file1','file2','day');
   
           session()->flash('mensaje', 'exito');
           return redirect()->to('/');
           
         } catch (\Exception $e) {
            session()->flash('errores', 'error, try again');
        }
        return redirect()->back();
    }
    
}
