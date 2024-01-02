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
        Schema::table('product_subcategories', function (Blueprint $table) {
            $table->string('banner_left')->after('featured_image')->nullable();
            $table->string('banner_right')->after('banner_left')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_subcategories', function (Blueprint $table) {
            $table->dropColumn('banner_left');
            $table->dropColumn('banner_right');
        });
    }
};
