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
            $table->integer(column: 'user_id');
            $table->text(column: 'product_id');
            $table->text(column: 'quantity');
            $table->float(column: 'total_price');
            $table->string(column: 'address');
            $table->string(column: 'pincode');
            $table->string(column: 'phone');
            $table->string(column: 'status')->nullable();
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
