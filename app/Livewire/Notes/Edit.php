<?php

namespace App\Livewire\Notes;

use App\Models\Note;
use Livewire\Component;

class Edit extends Component
{
    public Note $title;
    public Note $body;
    public $note;
    public function mount($slug) {
        $this->note =auth()->user()->notes()->where('uuid', $slug)->firstOrFail();
        //  Note::;
    }
    public function update() {
        $this->validate([
            'title' => ['required', 'string', 'min:3'],
            'body' => 'required'
        ],[
            'title.required' => 'Esqueceu de criar um titulo',
            'title.min' => 'Apenas são permitidos 3 caracteres',
            //validação de corpo
            'body.required' => 'Esqueceu de escrever a descrição', 
        ]);

        auth()->user()->notes()->update([
            'title' => $this->title,
            'body' => $this->body
        ]);

    }
    public function render()
    {
        return view('livewire.notes.edit')->layout('layouts.app');
    }
}
