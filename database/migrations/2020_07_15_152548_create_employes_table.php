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
            $table->date('DNS');
            $table->string('Sexe');
            $table->string('StatutFamilierFr');
            $table->string('StatutFamilierAr');
            $table->string('Telephone');
            $table->string('AdressFr');
            $table->string('AdressAr');
            $table->string('Picture');
            $table->foreignId('parent_id')->constrained()->onDelete('cascade');
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
