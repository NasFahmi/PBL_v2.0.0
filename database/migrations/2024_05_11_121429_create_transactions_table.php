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
            $table->date('date');
            $table->foreignId('costumer_id')->constrained('costumers')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('payment_methode')->constrained('payment_methodes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('quantity');
            $table->string('total_price');
            $table->longText('notes');
            $table->boolean('is_preorder');
            $table->boolean('preorder_id')->constrained('preorders')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('is_complete');
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

