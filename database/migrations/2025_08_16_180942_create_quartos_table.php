<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hoteis')->onDelete('cascade');
            $table->string('numero');
            $table->string('tipo'); // Ex: Solteiro, Casal
            $table->decimal('preco', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('quartos');
    }
};
