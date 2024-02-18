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
        Schema::create('lagerorts', function (Blueprint $table) {
            $table->id();
            $table->string('raum');
            $table->string('schrank')->nullable();
            $table->string('stellplatz')->nullable();
            $table->foreignId('komponenten_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lagerorts');
    }
};
