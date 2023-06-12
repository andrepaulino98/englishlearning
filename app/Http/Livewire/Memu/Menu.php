<?php

namespace App\Http\Livewire\Memu;

use Livewire\Component;

class Menu extends Component
{

    public $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.memu.menu');
    }

    public function login(){
        return view('login');
    }
}
