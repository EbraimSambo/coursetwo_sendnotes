<?php

namespace App\Livewire\Notes;

use Livewire\Component;

class Index extends Component
{
    public $note = "Sambo";
    public function render()
    {

        return view('livewire.notes.index')->layout('layouts.app');
    }
}
