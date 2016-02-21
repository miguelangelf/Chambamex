<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDataTable extends Migration
{

    //Create a class like this running: php artisan make:migration create_users_data_table --create="infoUsers"

    //Rollback with new fields install:composer require doctrine/dbal



    /**
     * Run the migrations.  
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->text('message');
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
        Schema::drop('infoUsers');
    }
}
