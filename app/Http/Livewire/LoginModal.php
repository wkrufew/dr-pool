<?php

namespace App\Http\Livewire;

use Livewire\Component;
/* use Livewire\Request; */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginModal extends Component
{
    public string $email='';
    public string $password='';
    public string $currentPath='';
    public $open = false;

    protected $listeners = ['login-modal' => 'abirmodal'];

    public function abirmodal()
    {
        if ($this->open) {
            $this->open = false;
            $this->email = '';
            $this->password = '';
        } else {
            $this->open = true;
        }
        
    }

    public function mount()
    {
        $this->currentPath = request()->path();
    }

    protected $rules = [
        'email' => 'required|email|string',
        'password' => 'required|string'
    ];

    public function render()
    {
        return view('livewire.login-modal');
    }
    
    public function login(Request $request)
    {
        $this->validate();

        if ($this->attemptLogin()) {
            $request->session()->regenerate();
            return redirect()->intended($this->currentPath);
        }

        session()->flash('error','The credentials do not match');
        return;
    }

    public function attemptLogin()
    {
        
        return $this->guard()->attempt(['email' => $this->email,'password' => $this->password]);
    }

    public function guard()
    {
        return Auth::guard();
    }
}
