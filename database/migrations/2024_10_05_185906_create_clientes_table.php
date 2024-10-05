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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre', 50);
            $table->string('Apellido', 50);
            $table->string('Direccion', 100)->nullable();
            $table->string('Telefono', 15)->nullable();
            $table->string('Email', 50)->unique();
            $table->enum('Estado', ['con credito', 'sin credito']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
