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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->integer('document');
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->date('hire_date');
            $table->string('position')->nullable();
            $table->string('contract_type'); //'fijo', 'por_horas', 'obra_labor'
            $table->decimal('salary', 10, 2)->default(0); // Para empleados fijos
            $table->decimal('hourly_rate', 10, 2)->default(0); // Para empleados por horas
            $table->string('payment_frequency');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
