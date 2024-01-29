<div  class="space-y-2">
    <h2 class="bg-white mt-12">Está aqui as notas</h2>
    @if (!$this->notes()->isEmpty())
        <ul class="grid grid-cols-2 gap-4 mt-12 p-2">
            @foreach ($this->notes() as $note)
            <x-card class="p-4"> 
                    <h1>{{$note->title}}</h1>
                    <p> {{$note->created_at->format('d/m/Y')}} </p>
                    <x-button href="{{ route('show', $note->uuid) }}" wire:navigate>Ver</x-button>
                    <div class="">
                        <x-button.circle icon="eye"></x-button.circle>
                        <x-button.circle icon="trash"></x-button.circle>

                    </div>
                </x-card>
            @endforeach 
        </ul>
        @else
            <h1>Nenhuma nota foi criada no momento</h1>
            <x-button Primary href="{{ route('notes.create')}}" wire:navigate> Criar Notas </x-button>
        @endif 
     

</div>
