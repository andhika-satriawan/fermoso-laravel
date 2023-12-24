<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class City extends Model
{
    use HasFactory;

    public $table = 'cities';

    protected $fillable = [
        'province_id',
        'province_name',
        'type',
        'city_name',
    ];

    /**
     * Get the province that owns the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }

    /**
     * Get all of the kecamatan for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kecamatans(): HasMany
    {
        return $this->hasMany(Kecamatan::class, 'city_id', 'id');
    }
    
}
