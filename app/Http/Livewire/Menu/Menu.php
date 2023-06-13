<?php

namespace App\Http\Livewire\Menu;

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
        return view('livewire.menu.menu');
    }

    public function login(){
        return redirect()->to('/login');
    }

    public function registry(){
        return redirect()->to('/registry');
    }
}
