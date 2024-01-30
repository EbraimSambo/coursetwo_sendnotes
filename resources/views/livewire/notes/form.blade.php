<form wire:submit="save">
    @if (session('sucess'))
    <div class="alert alert-success pb-3">
        {{ session('sucess') }}
    </div>
    @endif
    <div class="m-2">
        <x-input wire:model="title" type="text" />
        @error($title)
        <div class="mt-2">{{$title}}</div> 
        @enderror        
    </div>

    <div class="mt-4">
        <x-input wire:model="body" type="text" />
        @error($title)
            <div class="mt-2">{{$body}}</div> 
        @enderror        
    </div>


    <x-button type="submit" >Criar Notas</x-button>
</form>