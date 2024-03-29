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

        $validaited = $this->validate([
            'title' => ['required', 'string', 'min:3'],
            'body' => 'required'
        ],[
            'title.required' => 'Esqueceu de criar um titulo',
            'title.min' => 'Apenas são permitidos 3 caracteres',
            //validação de corpo
            'body.required' => 'Esqueceu de escrever a descrição', 
        ]);

        auth()->user()->notes()->create([
            'uuid' => Str::uuid(10),
            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->reset();
       return session()->flash('sucess', 'Dados Enviados com sucesso.');

    }

    public function render()
    {
        return view('livewire.notes.form');
    }
}
