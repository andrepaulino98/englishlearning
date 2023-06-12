<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class AuthForm extends Component
{

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.auth.auth-form');
    }




}
