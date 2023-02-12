<?php

namespace App\Models;

use Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Storage extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name', 'description', 'opening_time', 'closing_time',
        'country', 'city', 'district', 'address', 'maps', 'team_id'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->team_id = Auth::user()->current_team_id ?? 1;
        });
    }

    /**
     * Route Key
     *
     * @return string
     */
    public function getRouteKeyName() :string
    {
        return 'slug';
    }

    public static function ownStorages()
    {
        return (new Storage)->where('team_id', Auth::user()->current_team_id);
    }
    public function products() : BelongsToMany
    {
        return $this->belongsToMany(Products::class)
            ->whereNull('team_id')
            ->orWhere('team_id', Auth::user()->current_team_id)
            ->withPivot(['priority'])->orderBy('priority', 'DESC');
    }
}
