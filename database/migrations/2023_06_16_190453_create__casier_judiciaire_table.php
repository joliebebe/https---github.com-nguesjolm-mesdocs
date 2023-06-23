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
        Schema::create('Casier_judiciaire', function (Blueprint $table) {
            $table->id();
            $table->enum('situation_matrimoniale',['celibataire', 'marié']);
            $table->binary('extrait_naissance');
            $table->string('profession');
            $table->string('ville_habitation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Casier_judiciaire');
    }
};
