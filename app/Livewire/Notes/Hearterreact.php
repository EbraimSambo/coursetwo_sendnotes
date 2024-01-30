<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Hearterreact extends Component
{
    public Note $note;
    public $heartCount;

    public function mount(Note $note) {
        $this->note = $note;
        $this->heartCount = $note->heart_count;
    }

    public function increment() {
        $this->note->heart_count ++;
        $this->note->save();
        $this->heartCount = $this->note->heart_count;
    }
    public function render()
    {
        return view('livewire.notes.hearterreact');
    }
}
