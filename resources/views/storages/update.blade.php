<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $storage->name  }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Bilgileri Güncelle</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Ürün Tanımlama</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @livewire('storages.update-storage-form')
                </div>
                <div class="hidden" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                    @livewire('storages.products-storage-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
