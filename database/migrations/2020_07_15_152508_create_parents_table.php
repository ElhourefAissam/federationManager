<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('NomFr');
            $table->string('NomAr')->nullable();
            $table->string('CNI');
            $table->string('ParenteFr')->nullable();
            $table->string('ParenteAr')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('AdressFr')->nullable();
            $table->string('AdressAr')->nullable();
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
        Schema::dropIfExists('parents');
    }
}
