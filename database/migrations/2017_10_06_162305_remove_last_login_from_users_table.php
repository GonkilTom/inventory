<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveLastLoginFromUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_login');
        });

    }
    public function down()
    {
       Schema::table('users', function (Blueprint $table) {
          $table->DateTime('last_login')->after('active');
      });
    }
}
