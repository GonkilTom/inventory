<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateItemsTable extends Migration
{
    public function up()
    {
        Schema::create('items',function(Blueprint $table){
          $table->increments('id');
          $table->string('item_name')->unique();
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('category');
          $table->integer('quantity');
          $table->float('unit_price');
          $table->timestamps();
        });
    }
    public function down()
    {
      Schema::dropIfExists('items');
    }
}
