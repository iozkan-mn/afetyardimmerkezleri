<?php

namespace App\Http\Livewire;

use App\Models\Storage;
use Livewire\Component;

class UpdateStorage extends Component
{
    public Storage $storage;

    public $name;
    public $opening_time;
    public $closing_time;
    public $description;
    public $country;
    public $city;
    public $district;
    public $address;
    public $maps;

    protected $rules = [
        'name' => ['required', 'string', 'min:6'],
        'opening_time' => ['required', 'string'],
        'closing_time' => ['required', 'string'],
        'description' => ['required', 'string'],
        'country' => ['required', 'string'],
        'city' => ['required', 'string'],
        'district' => ['sometimes', 'nullable', 'string'],
        'address' => ['required', 'string'],
        'maps' => ['sometimes', 'nullable', 'string'],
    ];

    public function mount()
    {
        $this->storage = request()->storage;
        $this->name = $this->storage->name;
        $this->opening_time = $this->storage->opening_time;
        $this->closing_time = $this->storage->closing_time;
        $this->description = $this->storage->description;
        $this->country = $this->storage->country;
        $this->city = $this->storage->city;
        $this->district = $this->storage->district;
        $this->address = $this->storage->address;
        $this->maps = $this->storage->maps;

    }

    public function render()
    {
        return view('storages.update-storage-form');
    }
}
