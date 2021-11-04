<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTavernsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taverns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->boolean('active');
            $table->bigInteger('adventurer_id')->unsigned();
            $table->timestamps();

            $table->foreign('adventurer_id')->references('id')->
                on('adventurers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taverns');
    }
}
