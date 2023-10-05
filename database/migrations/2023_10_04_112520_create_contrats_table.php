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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id('id_ctr');
            $table->string('titre_ctr');
            $table->text('desc_ctr');
            $table->string('type_ctr');
            $table->date('date_sign_ctr');
            $table->unsignedBigInteger('id_prt'); // Clé étrangère pour le Partenaire
            $table->unsignedBigInteger('id_user'); // Clé étrangère pour le user

            // Autres colonnes
            $table->timestamps();

            $table->foreign('id_prt')->references('id_prt')->on('partenaires');
            $table->foreign('id_user')->references('id_user')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
