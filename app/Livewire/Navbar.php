<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $click = 1;
    public function handleClick() 
    {
        $this->click++;
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
