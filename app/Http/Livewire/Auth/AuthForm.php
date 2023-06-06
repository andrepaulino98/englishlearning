<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class AuthForm extends Component
{

    public $showLogin = true;

    public function toggleForm()
    {
        $this->showLogin = !$this->showLogin;
    }

    public function render()
    {
        return view('livewire.auth.auth-form');
    }
}
