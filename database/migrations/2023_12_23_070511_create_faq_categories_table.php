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
        Schema::create('faq_categories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('faq_id', false, true);
            $table->foreign('faq_id')->references('id')->on('faqs');

            $table->unsignedBigInteger('master_faq_category_id', false, true);
            $table->foreign('master_faq_category_id')->references('id')->on('master_faq_categories');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_categories');
    }
};
