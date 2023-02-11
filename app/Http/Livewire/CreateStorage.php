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

    public function create()
    {   
        $validated = $this->validate();
        try {
            Storage::create($validated);
        } catch (\Throwable $ex) {
            $this->addError('result', $ex->getMessage());
        }
        session()->flash('success', __('message.storage_added', ['name' => $validated['name']]));
        redirect()->to(route('new-storage'));
    }

    public function render()
    {
        return view('livewire.create-storage');
    }
}