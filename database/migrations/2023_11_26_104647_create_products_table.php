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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('product_subcategory_id', false, true);
            $table->foreign('product_subcategory_id')->references('id')->on('product_subcategories')->onDelete('cascade');
            
            $table->string('name');
            $table->string('slug')->unique();
            $table->longText('description');
            $table->string('photo');
            $table->string('video_url')->nullable();
            $table->string('video_youtube_url')->nullable();
            $table->unsignedInteger('status')->default(1); // 0 = tidak aktif || 1 = aktif || 2 = draft
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
