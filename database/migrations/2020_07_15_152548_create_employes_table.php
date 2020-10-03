<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('NomFr');
            $table->string('NomAr');
            $table->string('CNI');
            $table->date('DNS')->nullable();
            $table->string('Sexe')->nullable();
            $table->string('StatutFamilierFr')->nullable();
            $table->string('StatutFamilierAr')->nullable();
            $table->string('Telephone');
            $table->string('AdressFr')->nullable();
            $table->string('AdressAr')->nullable();
            $table->string('Picture')->nullable();
            $table->foreignId('parent_id')->nullable()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('employes');
    }
}
