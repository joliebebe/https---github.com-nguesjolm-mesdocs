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
        Schema::create('type_acte', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acte_deces_id')->constrained('acte_deces');
            $table->foreignId('acte_mariage_id')->constrained('acte_mariage');
            $table->foreignId('acte_naissance_etrang_id')->constrained('acte_naissance_etrang');
            $table->foreignId('acte_naissance_id')->constrained('acte_naissance');
            $table->foreignId('certification_document_id')->constrained('certification_document');
            $table->foreignId('copie_integrale_deces_id')->constrained('copie_integrale_deces');
            $table->foreignId('legalisation_signature_id')->constrained('legalisation_signature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_acte');
    }
};
