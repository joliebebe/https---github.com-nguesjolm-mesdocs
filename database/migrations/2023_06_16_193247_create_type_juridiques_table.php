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
        Schema::create('type_juridiques', function (Blueprint $table) {
            $table->id();
            $table->foreignId('casier_judiciaire_etrangere_id')->constrained('casier_judiciaire_etrangere');
            $table->foreignId('casier_judiciaire_id')->constrained('casier_judiciaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_juridiques');
    }
};
