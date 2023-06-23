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
        Schema::create('Acte_mariage', function (Blueprint $table) {
            $table->id();
            $table->string('nom_femme', 10);
            $table->string('prenom_femme', 50);
            $table->string('nom_homme', 10);
            $table->string('prenom_homme', 50);
            $table->string('sexe_homme', 5);
            $table->string('sexe_femme', 5);
            $table->date('date_naissance_femme');
            $table->date('date_naissance_homme');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Acte_mariage');
    }
};
