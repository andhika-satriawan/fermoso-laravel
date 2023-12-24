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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('customer_id', false, true);
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');

            $table->string('label');
            $table->string('recipient_name', 200);
            $table->string('phone', 18);

            $table->unsignedBigInteger('province_id', false, true);
            $table->foreign('province_id')->references('id')->on('provinces');

            $table->unsignedBigInteger('city_id', false, true);
            $table->foreign('city_id')->references('id')->on('cities');

            $table->unsignedBigInteger('kecamatan_id', false, true)->nullable();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatans');

            $table->string('kelurahan');
            $table->tinyText('address_detail');
            $table->string('postal_code');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
