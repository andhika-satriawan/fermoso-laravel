<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MasterArticleCategory extends Model
{
    use HasFactory;

    public $table = 'master_article_categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * The articles that belong to the MasterArticleCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_categories', 'master_article_category_id', 'article_id');
    }
}
