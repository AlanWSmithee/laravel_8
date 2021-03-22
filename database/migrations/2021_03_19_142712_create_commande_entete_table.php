<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeEnteteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_entete', function (Blueprint $table) {
            $table->id('commande_entete_id');
            $table->foreignId('utilisateur_id')->references('utilisateur_id')->on('utilisateur');
            $table->timestamps();
        });

        // Schema::table('commande_entete', function (Blueprint $table) {
        //     $table->timestamp('created_at')->useCurrent()->change();
        //     $table->timestamp('updated_at')->useCurrentOnupdate()->change();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_entete');
    }
}
