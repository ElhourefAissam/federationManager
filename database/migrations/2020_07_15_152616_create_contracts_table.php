<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('FunctionFr');
            $table->string('FunctionAr');
            $table->date('DateDebut');
            $table->date('DateFin');
            $table->double('Salaire',8,2);
            $table->foreignId('employe_id')->references('id')->on('employes');
            $table->foreignId('office_id')->references('id')->on('offices');
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
        Schema::dropIfExists('contracts');
    }
}
