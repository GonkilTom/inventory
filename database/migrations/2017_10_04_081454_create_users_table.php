<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('username')->unique();
          $table->integer('phone number');
          $table->string('home address');
          $table->string('email')->unique();
          $table->string('password');
          $table->rememberToken();
          $table->enum('admin', ['admin','non-admin']);
          /*$table->enum('status', ['1','0']);
          $table->integer('status');*/
          $table->integer('status')->length(1);
          $table->string('next of kin');
          $table->string('phonenumber of kin');
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
        Schema::dropIfExists('users');
    }
}
