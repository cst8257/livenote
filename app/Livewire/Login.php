<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $loginMessage;
    
    public function authenticate () {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $valid = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if ($valid) {
            $this->redirectIntended('/');
        } else {
            $this->loginMessage = 'Login invalid';
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
