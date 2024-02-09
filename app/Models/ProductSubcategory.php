<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSubcategory extends Model
{
    use HasFactory;

    public $table = 'product_subcategories';

    protected $fillable = [
        'product_category_id',
        'name',
        'slug',
        'icon',
        'image',
        'featured_image',
        'banner_top',
        'banner_left',
        'banner_right',
    ];

    /**
     * Get the category that owns the ProductSubcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    /**
     * Get all of the products for the ProductSubcategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'product_subcategory_id', 'id');
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
