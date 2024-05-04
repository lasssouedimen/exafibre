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
        Schema::create('travails', function (Blueprint $table) {
            $table->id();
            $table->integer('id_demande')->nullable();
            $table->integer('id_technicien')->nullable();
            $table->integer('id_parking')->nullable();  
            $table->date('datedebut')->nullable();
            $table->date('datefin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travails');
    }
};
