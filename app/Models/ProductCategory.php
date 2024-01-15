<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCategory extends Model
{
    use HasFactory;

    public $table = 'product_categories';

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'image',
        'featured_image'
    ];

    /**
     * Get all of the subcategories for the ProductCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories(): HasMany
    {
        return $this->hasMany(ProductSubcategory::class, 'product_category_id', 'id');
    }
}
