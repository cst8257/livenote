<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $loginMessage;
    
    public function render()
    {
        return view('livewire.login');
    }
}
