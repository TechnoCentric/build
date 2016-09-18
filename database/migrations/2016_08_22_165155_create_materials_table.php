<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('materials', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string("material_type");
            $table->decimal("amount_paid", 15, 2);
            $table->date("payment_date")->nullable();
            $table->string("paid_to");
            $table->string("payment_type");
            $table->string("payment_status");
            $table->integer('project_id')->unsigned();

            $table->foreign('project_id')->references('id')->on('pojects')->onDelete('cascade');
            
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
        //
        Schema::drop('materials');
    }
}
