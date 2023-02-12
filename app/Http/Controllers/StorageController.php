<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        $storages = Storage::all();
        dd('list');
        return view('storages.index', compact('storages'));
    }

    public function show(Request $request, Storage $storage)
    {
        return view('storages.show', compact('storage'));
    }

    public function create(Request $request) 
    {
        return view('storages.create')->layout('layouts.app');
    }

    public function update(Request $request, Storage $storage) 
    {
        return view('storages.update', compact('storage'))->layout('layouts.app');
    }
}
