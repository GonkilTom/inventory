<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullToCertainVariables extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('home_address')->nullable()->change();

        });
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->string('username')->change();
          $table->string('phone_number')->change();
          $table->string('home_address')->change();
        });
    }
}
