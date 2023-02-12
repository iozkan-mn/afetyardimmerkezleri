<?php

namespace App\Http\Livewire;

use App\Models\Storage;
use Livewire\Component;

class ProductsStorage extends Component
{
    public Storage $storage;

    public function mount()
    {
        $this->storage = request()->storage;
    }

    public function render()
    {
        return view('storages.products-storage-form');
    }
}
