<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class SingleNotes extends Component
{

    public $note;

    public function mount($slug) {
        $this->note =auth()->user()->notes()->where('uuid', $slug)->firstOrFail();
        //  Note::;
    }
    public function render()
    {
        return view('livewire.notes.single-notes')->layout('layouts.app');
    }
}
