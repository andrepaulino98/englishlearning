<?php

namespace App\Http\Livewire\Listening;

use Livewire\Component;

class Listening extends Component
{
    public $title;
    public $url;
    public $description;


    public function render()
    {
        return view('livewire.listening.listening');
    }
}
