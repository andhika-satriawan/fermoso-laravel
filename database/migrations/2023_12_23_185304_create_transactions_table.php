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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique();

            $table->unsignedBigInteger('customer_id', false, true);
            $table->foreign('customer_id')->references('id')->on('customers');

            $table->string('recipient_name', 200);
            $table->string('phone', 18);
            $table->longText('shipping_address');
            $table->unsignedDecimal('total_price', $precision = 15, $scale = 2); // max: 999.999.999.999.999,00
            $table->unsignedDecimal('shipping_price', $precision = 15, $scale = 2); // max: 999.999.999.999.999,00
            $table->unsignedDecimal('total', $precision = 15, $scale = 2); // max: 999.999.999.999.999,00
            $table->string('shipping_status', 100); // PENDING/PROCESS/SHIPPING/SUCCESS
            $table->string('courier', 150); // JNE/SICEPAT/TIKI
            $table->string('service', 150); // REG/YES/HALU
            $table->string('resi', 200)->nullable(); // NO. RESI
            $table->string('payment_url')->nullable();
            $table->string('payment_token')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('transaction_status')->default('PENDING'); // PENDING/SUCCESS/CANCELLED
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
