<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Products extends Model
{
    use HasFactory;
    

    protected $appends = ['priority'];

    public function storages() : BelongsToMany
    {
        return $this->belongsToMany(Products::class, 'products_storage', 'id', 'storage_id')->whereNull('team_id')->orWhere('team_id', Auth::user()->current_team_id)->withPivot(['priority']);
    }
    
    public function getPriorityAttribute()
    {
        if (isset($this->pivot->priority)) {
            return $this->pivot->priority;
        }
        return null;
    }
}
