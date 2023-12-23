<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MasterFaqCategory extends Model
{
    use HasFactory;

    public $table = 'master_faq_categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * The faqs that belong to the MasterArticleCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function faqs(): BelongsToMany
    {
        return $this->belongsToMany(Faq::class, 'faq_categories', 'master_faq_category_id', 'faq_id');
    }
}
