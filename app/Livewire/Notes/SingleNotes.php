<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class SingleNotes extends Component
{

    public $note;

    public function mount($slug) {
        $this->note = Note::where('uuid', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.notes.single-notes')->layout('layouts.app');
    }
}
