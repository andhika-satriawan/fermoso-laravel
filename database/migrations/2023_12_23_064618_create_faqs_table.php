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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('image')->nullable();
            $table->unsignedInteger('status')->default(1); // 0 = TIDAK AKTIF || 1 = AKTIF || 2 = DRAFT
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs');
    }
};
