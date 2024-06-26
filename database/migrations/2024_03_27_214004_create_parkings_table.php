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
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->string('Marque')->nullable();
            $table->string('codegps')->nullable();
            $table->string('Matricule')->nullable();
            $table->integer('kilométrage')->nullable();
            $table->integer('dispo')->default(0); 
            $table->integer('arch')->default(0);

            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkings');
    }
};
