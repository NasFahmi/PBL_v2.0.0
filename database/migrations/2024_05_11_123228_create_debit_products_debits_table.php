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
        Schema::create('debit_products_debits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debit_id')->constrained('debits')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debit_products_debits');
    }
};
