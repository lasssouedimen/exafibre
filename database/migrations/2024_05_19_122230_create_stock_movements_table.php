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
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
        $table->string('libelle');
        $table->integer('entree')->nullable();
        $table->integer('sortie')->nullable();
        $table->decimal('prix_unitaire', 8, 2);
        $table->decimal('valeur', 10, 2);
            $table->timestamps();
        });
    }
   



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
