<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->double('value');
            $table->integer('petshop_id')->unsigned();
            $table->integer('typepet_id')->unsigned();
            $table->foreign('petshop_id')
                ->references('id')
                ->on('petshops')
                ->onDelete('cascade');
            $table->foreign('typepet_id')
                ->references('id')
                ->on('typepets')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
