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
        Schema::create('Casier_judiciaire_etrangere', function (Blueprint $table) {
            $table->id();
            $table->binary('cni_parent_pere');
            $table->binary('cni_parent_mere');
            $table->binary('passport');
            $table->binary('extrait_naissance');
            $table->binary('carte_sejour');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Casier_judiciaire_etrangere');
    }
};
