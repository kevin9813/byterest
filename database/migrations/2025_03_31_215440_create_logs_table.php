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
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('company_id')->nullable()->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('user_id')->nullable(); // Quién hizo el cambio
            $table->string('action'); // create, update, delete
            $table->string('model'); // Nombre del modelo afectado (User, Product, etc.)
            $table->unsignedBigInteger('model_id'); // ID del modelo afectado
            $table->json('old_values')->nullable(); // Datos antes del cambio
            $table->json('new_values')->nullable(); // Datos después del cambio
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
