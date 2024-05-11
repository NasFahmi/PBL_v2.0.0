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
        Schema::create('product_debits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debit_products_debits_id')->constrained('debit_products_debits')->cascadeOnDelete();
            $table->string('name');
            $table->string('quantity');
            $table->string('price');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_debits');
    }
};
