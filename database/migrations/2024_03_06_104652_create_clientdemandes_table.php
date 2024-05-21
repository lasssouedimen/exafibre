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
        Schema::create('clientdemandes', function (Blueprint $table) {
            $table->id();
            $table->string('prenom')->nullable();
            $table->string('nomfamille')->nullable();
            $table->integer('telephone')->nullable();
            $table->string('mail')->nullable();  
            $table->string('ville')->nullable();  
            $table->string('pays')->nullable();
            $table->string('adresse')->nullable();
            $table->string('remarque')->nullable();
            $table->string('etat')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientdemandes');
    }
};
