<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{

    public function up()
    {
        Schema::create('invoice', function(Blueprint $table){
          $table->increments('id');
          $table->float('total');
          $table->enum('payment_status',['PAID','PENDING']);
          $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
