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
        Schema::create('actions', function (Blueprint $table) {
            $table->id('id_action');
            $table->string('nom_ac');
            $table->string('type_ac');
            $table->date('datedebut_ac');
            $table->date('datefin_ac');
            $table->text('desc_ac');
            $table->unsignedBigInteger('id_user'); // Clé étrangère pour l'Utilisateur
            // Autres colonnes
            $table->timestamps();
            $table->foreign('id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
