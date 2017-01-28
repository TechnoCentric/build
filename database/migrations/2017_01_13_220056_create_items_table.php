<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
            $table->decimal("quantity", 15, 2);
            $table->decimal("price", 15, 2);
            $table->decimal("amount", 15, 2);
            $table->integer('supply_id')->unsigned();

            $table->foreign('supply_id')->references('id')->on('supplies')->onDelete('cascade');
            
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
        Schema::drop('items');
    }
}
