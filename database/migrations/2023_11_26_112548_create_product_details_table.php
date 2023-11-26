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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id', false, true);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('sku')->unique();
            $table->string('name');
            $table->string('image');
            $table->unsignedInteger('price');
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('length')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->unsignedInteger('status')->default(1); // 0 = tidak aktif || 1 = aktif || 2 = draft
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
