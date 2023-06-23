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
        Schema::create('Acte_naissance', function (Blueprint $table) {
            $table->id();
            $table->char('nom', 50);
            $table->char('prenoms', 100);
            $table->date('date_naissance');
            $table->string('pays_naissance', 100);
            $table->string('commune_naissance', 100);
            $table->char('nom_pere', 50);
            $table->char('prenoms_pere', 100);
            $table->char('nom_mere', 50);
            $table->char('prenoms_mere', 100);
            $table->enum('mere_inconnu', ['oui', 'non']);
            $table->enum('pere_inconnu', ['oui', 'non']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Acte_naissance');
    }
};
