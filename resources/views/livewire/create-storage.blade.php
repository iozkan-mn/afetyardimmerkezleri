<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('message.new_storage') }}
        </h2>
    </x-slot>
    <div>
   
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="create">
                <x-slot name="title">
                    {{ __('message.new_storage') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('message.new_storage_detail') }}
                </x-slot>
               
                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="name" value="{{ __('message.storage_name') }}" />
                        <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
                        <x-jet-input-error for="name" class="mt-2" />
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="opening_time" value="{{ __('message.storage_opening_time') }}" />
                        <x-jet-input id="opening_time" type="text" value="0000" class="mt-1 block w-full" wire:model.defer="opening_time" autocomplete="opening_time" />
                        <x-jet-input-error for="opening_time" class="mt-2" />
                        @error('opening_time') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="closing_timeStorage" value="{{ __('message.storage_closing_time') }}" />
                        <x-jet-input id="closing_timeStorage" type="text" value="0000" class="mt-1 block w-full" wire:model.defer="closing_time" autocomplete="closing_time" />
                        <x-jet-input-error for="closing_timeStorage" class="mt-2" />
                        @error('closing_time') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- 
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="descriptionStorage" value="{{ __('message.storage_description') }}" />
                        <x-jet-input id="descriptionStorage" type="text"  class="mt-1 block w-full" wire:model="description" autocomplete="description" />
                        <x-jet-input-error for="descriptionStorage" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="countryStorage" value="{{ __('message.storage_country') }}" />
                        <x-jet-input id="countryStorage" type="text" value="Türkiye" class="mt-1 block w-full" wire:model="country" autocomplete="country" />
                        <x-jet-input-error for="countryStorage" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="cityStorage" value="{{ __('message.storage_city') }}" />
                        <x-jet-input id="cityStorage" type="text" class="mt-1 block w-full" wire:model="city" autocomplete="city" />
                        <x-jet-input-error for="cityStorage" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="districtStorage" value="{{ __('message.storage_district') }}" />
                        <x-jet-input id="districtStorage" type="text" class="mt-1 block w-full" wire:model="district" autocomplete="district" />
                        <x-jet-input-error for="districtStorage" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="mapsStorage" value="{{ __('message.storage_maps') }}" />
                        <x-jet-input id="mapsStorage" type="text" class="mt-1 block w-full" wire:model="maps" autocomplete="maps" />
                        <x-jet-input-error for="mapsStorage" class="mt-2" />
                    </div> -->

                    @if (session()->has('result'))
                    <div class="col-span-6 sm:col-span-4">
                        <div role="alert">
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                               ERROR
                            </div>
                            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                <p>{{ session('result') }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-button class="ml-12">
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>
                </x-slot>


            </x-jet-form-section>
        </div>
    </div>
</x-app-layout>
