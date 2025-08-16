<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('hoteis', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('hoteis');
    }
};
