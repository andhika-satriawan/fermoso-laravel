<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'transaction_details';

    protected $fillable = [
        'invoice_no',
        'transaction_id',
        'product_id',
        'product_detail_id',
        'product_name',
        'sku',
        'quantity',
        'original_price',
        'price',
        'total'
    ];

    /**
     * Get the transaction that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    /**
     * Get the product that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * Get the product_detail that owns the TransactionDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product_detail(): BelongsTo
    {
        return $this->belongsTo(ProductDetail::class, 'product_detail_id', 'id');
    }
}
