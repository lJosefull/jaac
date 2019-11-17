<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProfileColums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::table('users', function (Blueprint $table) {

            $table->unsignedBigInteger('educacion_id');
            $table->foreign('educacion_id')->references('id')->on('education');
            $table->unsignedBigInteger('title_id');
            $table->foreign('title_id')->references('id')->on('education_profiles');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id_departamento')->on('departamentos');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id_municipio')->on('municipios');
            $table->integer('complet')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
