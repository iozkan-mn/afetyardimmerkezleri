
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $storage->name  }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-12xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('storages.update-storage-form')
        </div>
    </div>
    <div>
        <div class="max-w-12xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('storages.products-storage-form')
        </div>
    </div>
</x-app-layout>
