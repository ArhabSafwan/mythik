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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->string('status')->default('pending');
            $table->string('payment_method')->default('cash');
            $table->string('payment_status')->default('pending');
            $table->integer('shipping_address_id')->nullable();
            $table->integer('billing_address_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
