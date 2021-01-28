<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_annonce', function (Blueprint $table) {
            $table->id();
            $table->integer("quantite");
            $table->float("prix");
            $table->foreignId("annonce_id")->constrained("annonces");
            $table->foreignId("type_colis_id")->constrained("type_colis");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_annonce');
    }
}
