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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_no')->unique();

            $table->unsignedBigInteger('transaction_id', false, true);
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            
            $table->unsignedBigInteger('product_id', false, true);
            $table->foreign('product_id')->references('id')->on('products');
            
            $table->unsignedBigInteger('product_detail_id', false, true);
            $table->foreign('product_detail_id')->references('id')->on('product_details');

            $table->string('product_name');
            $table->string('sku')->nullable();

            $table->unsignedInteger('quantity');
            $table->unsignedDecimal('original_price', $precision = 15, $scale = 2);
            $table->unsignedDecimal('price', $precision = 15, $scale = 2); // max: 999.999.999.999.999,00
            $table->unsignedDecimal('total', $precision = 15, $scale = 2); // harga total = total_price + shipping_price | max: 999.999.999.999.999,00
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
