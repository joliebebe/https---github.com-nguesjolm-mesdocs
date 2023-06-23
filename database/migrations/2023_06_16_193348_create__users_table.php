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
        Schema::create('Users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->string('login', 8)->unique();
            $table->string('contact')->unique();
            $table->string('email')->unique();
            $password = bcrypt('motdepasse');
            $table->string('password')->default($password);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->binary('image');
            $table->enum('sexe',['homme', 'femme']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Users');
    }
};
