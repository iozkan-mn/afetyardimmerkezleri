<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'opening_time', 'closing_time',
        'country', 'city', 'district', 'maps'
    ];
    
    public function getRouteKeyName() :string
    {
        return 'slug';
    }

    public function ownStorages() : BelongsTo
    {
        return $this->belongsto(self::class)->where('team_id', Auth::user()->current_team_id);
    }
}
