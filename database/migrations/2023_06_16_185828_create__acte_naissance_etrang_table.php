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
        Schema::create('Acte_naissance_etrang', function (Blueprint $table) {
            $table->id();
            $table->binary('acte_naissance');
            $table->binary('certificat_national');
            $table->binary('cni_pere');
            $table->binary('cni_mere');
            $table->binary('passport_pere');
            $table->binary('passport_mere');
            $table->binary('acte_naissance_mere');
            $table->binary('acte_naissance_pere');
            $table->binary('certificat_deces_pere');
            $table->binary('certificat_deces_mere');
            $table->enum('mere_inconnu', ['oui', 'non']);
            $table->enum('pere_inconnu', ['oui', 'non']);
            $table->binary('id_attestation_pere');
            $table->binary('id_attestation_mere');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Acte_naissance_etrang');
    }
};
