<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storage\CreateStorageRequest;
use App\Models\Storage;
use Laravel\Jetstream\Jetstream;
use Request;

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
        return view('storages.new')
            ->layout('layouts.app');
    }

    public function store(CreateStorageRequest $request) 
    {
        return Storage::create($request->validated());
    }
}
