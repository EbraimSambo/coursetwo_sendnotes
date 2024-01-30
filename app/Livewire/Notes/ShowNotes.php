<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowNotes extends Component
{
    public $notes;

    public function notes() {
        return Auth::user()->notes()->orderBy('title', 'asc')->get();
    }

    function delete($slug){
       $note = Note::where('uuid', $slug)->firstOrFail();
       $this->authorize('delete', $note);
       $note->delete();
    }
    public function render()
    {
        return view('livewire.notes.show-notes');
    }
}
