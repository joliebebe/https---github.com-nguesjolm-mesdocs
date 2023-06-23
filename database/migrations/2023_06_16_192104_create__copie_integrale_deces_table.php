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
        Schema::create('copie_integrale_deces', function (Blueprint $table) {
            $table->id();
            $table->date('date_heure');
            $table->char('nom', 50);
            $table->char('prenom', 50);
            $table->char('profession', 50);
            $table->date('date_naissance');
            $table->char('lieu_naissance', 50);
            $table->char('domicile', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copie_integrale_deces');
    }
};
