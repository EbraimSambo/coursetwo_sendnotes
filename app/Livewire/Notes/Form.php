<?php

namespace App\Livewire\Notes;

use Livewire\Component;
use Illuminate\Support\Str;

class Form extends Component
{

    public $title;
    public $body;
    public $bodyr= "sambo";

    public function save(){

        auth()->user()->notes()->create([
            'uuid' => Str::uuid(10),
            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->reset();

    }

    public function render()
    {
        return view('livewire.notes.form');
    }
}
