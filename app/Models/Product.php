<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';

    protected $fillable = [
        'product_subcategory_id',
        'name',
        'slug',
        'description',
        'photo',
        'video_url',
        'video_youtube_url',
        'status'
    ];

    /**
     * Get the product_subcategory that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product_subcategory(): BelongsTo
    {
        return $this->belongsTo(ProductSubcategory::class, 'product_subcategory_id', 'id');
    }

    /**
     * Get all of the details for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details(): HasMany
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }
}
