<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Home extends Component
{
    public string $home = "";

    public function __construct() {
        $this->home = "sambo";
    }

    public function render()
    {
        $this->home = "sambo";
        
        return view('livewire.pages.home');
    }
}
