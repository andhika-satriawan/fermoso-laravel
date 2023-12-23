<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MasterArticleTag extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'master_article_tags';

    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * The articles that belong to the MasterArticleTag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class, 'article_categories', 'master_article_tag_id', 'article_id');
    }
}
