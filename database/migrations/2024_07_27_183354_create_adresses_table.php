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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['Comercial', 'Residencial']);
            $table->string('CEP', 8);
            $table->string('logradouro', 100);
            $table->string('numero', 6);
            $table->string('complemento', 100);
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};
