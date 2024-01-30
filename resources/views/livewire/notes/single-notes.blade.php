<x-slot name="header">
    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
         {{$note->title}}
    </h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{$note->body}}
            </div>
            <livewire:notes.hearterreact :note="$note">
            <x-button href="{{ route('edit', $note->uuid )}}" wire:navigate>Editar</x-button>
        </div>
    </div>
</div>