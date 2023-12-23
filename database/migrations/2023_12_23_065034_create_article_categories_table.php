<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article_categories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('article_id', false, true);
            $table->foreign('article_id')->references('id')->on('articles');

            $table->unsignedBigInteger('master_article_category_id', false, true);
            $table->foreign('master_article_category_id')->references('id')->on('master_article_categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_categories');
    }
};
