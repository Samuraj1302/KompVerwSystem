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
        Schema::create('ausleihhistories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('komponenten_id')->constrained()->cascadeOnDelete();
            $table->foreignId('bezeichner_id')->constrained()->cascadeOnDelete();
            $table->date('ausleihdatum');
            $table->date('rückgabedatum');
            $table->string('ausleihstatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ausleihhistories');
    }
};
