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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('libellé')->nullable();
            $table->integer('qte')->nullable();
            $table->integer('prixunitaire')->nullable();
            $table->integer('valeur')->nullable();
            $table->integer('qte1')->nullable();
            $table->integer('prixunitaire1')->nullable();
            $table->integer('valeur1')->nullable();
            $table->integer('qte2')->nullable();
            $table->integer('prixunitaire2')->nullable();
            $table->integer('valeur2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
