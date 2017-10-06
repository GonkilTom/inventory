<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateInvoiceLineTable extends Migration
{
    public function up()
    {
      Schema::create('invoice_line',function(Blueprint $table){
        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id')->references('id')->on('users');
        $table->integer('invoice_id')->unsigned();
        $table->foreign('invoice_id')->references('id')->on('invoice');
        $table->float('unit_price');
        $table->integer('quantity');
        $table->timestamps();
      });
    }
    public function down()
    {
        Schema::dropIfExists('invoice_line');
    }
}
