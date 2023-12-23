<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Faq extends Model
{
    use HasFactory;

    public $table = 'faqs';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'status'
    ];

    /**
     * The categories that belong to the Faq
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(MasterFaqCategory::class, 'faq_categories', 'faq_id', 'master_faq_category_id');
    }
}
