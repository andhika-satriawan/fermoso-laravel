<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReviewDummy extends Model
{
    use HasFactory;

    public $table = 'review_dummies';

    protected $fillable = [
        'product_id',
        'customer_name',
        'rating',
        'comment',
    ];

    /**
     * Get the product that owns the ReviewDummy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
