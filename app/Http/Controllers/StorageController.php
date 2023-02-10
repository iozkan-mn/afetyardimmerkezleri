<?php

namespace App\Http\Controllers;

use App\Models\Storage;

class StorageController extends Controller
{
    public function index()
    {
        $storages = Storage::all();
        return view('storages.index', compact('storages'));
    }

    public function show($slug)
    {
        $storage = Storage::where('slug', $slug)->first();
        return view('storages.show', compact('storage'));
    }
}
