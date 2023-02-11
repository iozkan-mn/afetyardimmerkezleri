<x-jet-form-section submit="create">
    <x-slot name="title">
        {{ __('message.new_storage') }}
    </x-slot>

    <x-slot name="description">
        {{ __('message.new_storage_detail') }}
    </x-slot>

    <x-slot name="form">
        @if (session()->has('success'))
            <div class="col-span-6 sm:col-span-4">
                <div class="flex p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {!! session('success') !!}
                    </div>
                </div>
            </div>
        @endif

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('message.storage_name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="opening_time" value="{{ __('message.storage_opening_time') }}" />
            <x-jet-input id="opening_time" type="time" class="mt-1 block w-full" wire:model.defer="opening_time" autocomplete="opening_time" />
            <x-jet-input-error for="opening_time" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="closing_timeStorage" value="{{ __('message.storage_closing_time') }}" />
            <x-jet-input id="closing_timeStorage" type="time" class="mt-1 block w-full" wire:model.defer="closing_time" autocomplete="closing_time" />
            <x-jet-input-error for="closing_timeStorage" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="descriptionStorage" value="{{ __('message.storage_description') }}" />
            <x-jet-input id="descriptionStorage" type="text"  class="mt-1 block w-full" wire:model.defer="description" autocomplete="description" />
            <x-jet-input-error for="descriptionStorage" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="countryStorage" value="{{ __('message.storage_country') }}" />
            <x-jet-input id="countryStorage" type="text" value="Türkiye" class="mt-1 block w-full" wire:model.defer="country" autocomplete="country" />
            <x-jet-input-error for="countryStorage" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="cityStorage" value="{{ __('message.storage_city') }}" />
            <x-jet-input id="cityStorage" type="text" class="mt-1 block w-full" wire:model.defer="city" autocomplete="city" />
            <x-jet-input-error for="cityStorage" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="districtStorage" value="{{ __('message.storage_district') }}" />
            <x-jet-input id="districtStorage" type="text" class="mt-1 block w-full" wire:model.defer="district" autocomplete="district" />
            <x-jet-input-error for="districtStorage" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="addressStorage" value="{{ __('message.storage_address') }}" />
            <x-jet-input id="addressStorage" type="text" class="mt-1 block w-full" wire:model.defer="address" autocomplete="address" />
            <x-jet-input-error for="addressStorage" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="mapsStorage" value="{{ __('message.storage_maps') }}" />
            <x-jet-input id="mapsStorage" type="text" class="mt-1 block w-full" wire:model.defer="maps" autocomplete="maps" />
            <x-jet-input-error for="mapsStorage" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            @error('result')
            <div role="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    ERROR
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <p>{{ $message }}</p>
                </div>
            </div>
            @enderror
            <x-jet-validation-errors class="mb-4" />
        </div>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>


    </x-slot>
</x-jet-form-section>