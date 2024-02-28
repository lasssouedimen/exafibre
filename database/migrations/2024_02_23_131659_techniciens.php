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
        Schema::create('techniciens', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('adresse')->nullable();  
            $table->integer('tel')->nullable();
            $table->integer('Age')->nullable();
            $table->string('Datedébut')->nullable();
            $table->string('mail')->nullable();  
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
