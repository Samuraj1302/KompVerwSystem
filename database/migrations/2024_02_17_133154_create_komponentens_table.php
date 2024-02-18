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
        Schema::create('komponentens', function (Blueprint $table) {
            $table->id();
            $table->string('typenbezeichnung');
            $table->foreignId('kategorie_id')->constrained()->cascadeOnDelete();
            $table->foreignId('unterkategorie_id')->constrained()->cascadeOnDelete();
            $table->foreignId('lagerort_id')->constrained()->cascadeOnDelete();
            $table->foreignId('ausleihhistorie_id')->constrained()->cascadeOnDelete();
            $table->string('zustand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komponentens');
    }
};
