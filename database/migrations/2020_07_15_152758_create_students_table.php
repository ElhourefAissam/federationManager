<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('numero');
            $table->string('NomFr');
            $table->string('NomAr');
            $table->string('CNI');
            $table->string('Sexe');
            $table->string('Statut');
            $table->string('DNS');
            $table->string('AdressFr');
            $table->string('AdressAr');
            $table->string('Telephone');
            $table->string('Picture');
            $table->foreignId('parent_id')->constrained()->onDelete('cascade');
            $table->foreignId('handicap_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('students');
    }
}
