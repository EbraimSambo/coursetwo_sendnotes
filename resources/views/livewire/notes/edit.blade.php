<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Editar Notes') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="save">
                    @if (session('sucess'))
                    <div class="alert alert-success pb-3">
                        {{ session('sucess') }}
                    </div>
                    @endif
                    <div class="m-2">
                        <input wire:model="title" type="text" />
                        @error($title)
                        <div class="mt-2">{{$title}}</div> 
                        @enderror        
                    </div>
                
                    <div class="mt-4">
                        <input wire:model="body"  type="text" />
                        @error($title)
                            <div class="mt-2">{{$body}}</div> 
                        @enderror        
                    </div>
                    <div class="mt-4">
                        <input wire:model="body" type="chekbox" />
                        @error($title)
                            <div class="mt-2">{{$body}}</div> 
                        @enderror        
                    </div>
                
                    <x-button type="submit" >Criar Notas</x-button>
                </form>
            </div>
        </div>
    </div>
</div>
