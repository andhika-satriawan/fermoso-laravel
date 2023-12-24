<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Address extends Model
{
    use HasFactory;

    public $table = 'kelurahans';

    protected $fillable = [
        'customer_id',
        'label',
        'recipient_name',
        'phone',
        'province_id',
        'city_id',
        'kecamatan_id',
        'kelurahan',
        'address_detail',
        'postal_code',
        'latitude',
        'longitude',
    ];
}
