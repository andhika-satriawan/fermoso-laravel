<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'transactions';

    protected $fillable = [
        'code',
        'customer_id',
        'recipient_name',
        'phone',
        'shipping_address',
        'total_price',
        'shipping_price',
        'total',
        'shipping_status',
        'courier',
        'service',
        'resi',
        'payment_url',
        'payment_token',
        'payment_type',
        'transaction_status'
    ];

    /**
     * Get the customer that owns the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    /**
     * Get all of the transaction_details for the Transaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaction_details(): HasMany
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

}
