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
        Schema::create('kecamatans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('province_id', false, true)->nullable();
            $table->foreign('province_id')->references('id')->on('provinces');
            
            $table->string('province_name');
            
            $table->unsignedBigInteger('city_id', false, true);
            $table->foreign('city_id')->references('id')->on('cities');
            
            $table->string('city_name');
            
            $table->string('type', 255)->nullable();

            $table->string('kecamatan_name', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kecamatans');
    }
};
