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
            $table->foreignId('kategoriens_id')->constrained()->cascadeOnDelete();
            $table->foreignId('unterkategoriens_id')->constrained()->cascadeOnDelete();
            $table->foreignId('lagerorts_id')->constrained()->cascadeOnDelete();
            $table->foreignId('ausleihhistories_id')->nullable()->constrained()->cascadeOnDelete();
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
