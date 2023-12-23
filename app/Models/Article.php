<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    public $table = 'articles';

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'content',
        'image',
        'status'
    ];

    /**
     * The categories that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(MasterArticleCategory::class, 'article_categories', 'article_id', 'master_article_category_id');
    }

    /**
     * The tags that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(MasterArticleTag::class, 'article_tags', 'article_id', 'master_article_tag_id');
    }
}
