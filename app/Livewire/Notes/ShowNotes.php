<?php

namespace App\Livewire\Notes;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{
    public $notes;

    public function notes() {
        return Auth::user()->notes()->orderBy('title', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
