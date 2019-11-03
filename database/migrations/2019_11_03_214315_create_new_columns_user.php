<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewColumnsUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('business_name')->nullable();
            $table->string('type_sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('profile_type')->nullable();
            $table->integer('video_id')->nullable();
            $table->integer('profile_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_columns_user');
    }
}
