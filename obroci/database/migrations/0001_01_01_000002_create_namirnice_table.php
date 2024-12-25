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
        Schema::create('namirnice', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->integer('kalorije');
            $table->integer('proteini');
            $table->integer('ugljeni hidrati');
        });

        Schema::create('recept', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->integer('opis');
        });

        

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('namirnice');
        Schema::dropIfExists('recept');
    
    }
};
