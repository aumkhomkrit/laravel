<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiwatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apiwats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('auther');
            $table->integer('price');
            $table->date('publish_date');
            $table->string('publishing');
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
        Schema::dropIfExists('apiwats');
    }
}
