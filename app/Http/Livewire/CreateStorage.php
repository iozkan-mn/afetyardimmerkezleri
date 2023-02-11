<?php

namespace App\Http\Livewire;

use App\Models\Storage;
use Exception;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class CreateStorage extends Component
{
    public $name;
    public $opening_time;
    public $closing_time;
    // public $description;
    // public $country;
    // public $city;
    // public $district;
    // public $maps;

    protected $rules = [
        'name' => ['required', 'string', 'min:6'],
        'opening_time' => ['required', 'string'],
        'closing_time' => ['required', 'string'],
        // 'description' => ['required', 'string'],
        // 'country' => ['required', 'string'],
        // 'city' => ['required', 'string'],
        // 'district' => ['sometimes', 'nullable', 'string'],
        // 'maps' => ['sometimes', 'nullable', 'string'],
    ];

    public function updated($propertyName)
    {
      $this->validateOnly($propertyName);
    }

    public function create()
    {
        $this->reset();
        $this->resetErrorBag();
        $this->resetValidation();

        $this->validate();
        // try {
        //     Storage::create(['name' => $this->name]);
        // } catch (\Throwable $ex) {
        //     session()->flash('result', 'Database error');
        //     return false;
        // }

        return true;
    }

    public function render()
    {
        return view('livewire.create-storage');
    }
}