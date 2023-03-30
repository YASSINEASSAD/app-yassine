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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('file')->default('utilisateur.png');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('siren')->nullable();
            $table->string('siren_formate')->nullable();
            $table->string('nom_entreprise')->nullable();
            $table->string('personne_morale')->nullable();
            $table->string('denomination')->nullable();
            $table->string ('date_creation')->nullable();
            $table->string('date_creation_formate')->nullable();
            $table->string('entreprise_cessee')->nullable();
            $table->string('date_cessation')->nullable();
            $table->string('entreprise_employeuse')->nullable();
            $table->string('categorie_juridique')->nullable();
            $table->string('forme_juridique')->nullable();
            $table->string('effectif')->nullable();
            $table->string('effectif_min')->nullable();
            $table->string('effectif_max')->nullable();
            $table->string('tranche_effectif')->nullable();
            $table->string('annee_effectif')->nullable();
            $table->string('capital')->nullable();
            $table->string ('complement_adresse')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('ville')->nullable();
            $table->string('nb_dirigeants_total')->nullable();
            $table->string('nb_beneficiaires_total')->nullable();
            $table->string('nb_documents_avec_mentions')->nullable();
            $table->string('nb_documents_total')->nullable();
            $table->string('nb_publications_avec_mentions')->nullable();
            $table->string('nb_publications_total')->nullable();
            $table->string('total')->nullable();
            $table->string ('page')->nullable();
            $table->string('curseurSuivant')->nullable();
            $table->string('chiffre_affaires')->nullable();
            $table->string('resultat')->nullable();
            $table->string('effectifs_finances')->nullable();
            $table->string('annee_finances')->nullable();
            $table->string('iframe',4000)->nullable();
            //$table->bigInteger('user_id');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
