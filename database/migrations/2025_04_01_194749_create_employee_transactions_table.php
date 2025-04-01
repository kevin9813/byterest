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
        Schema::create('employee_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('employee_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('type'); // Tipo de ajuste
            $table->decimal('amount', 10, 2); // Valor del ajuste
            $table->string('description')->nullable();
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_transactions');
    }
};
