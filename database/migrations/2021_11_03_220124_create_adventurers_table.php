<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdventurersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventurers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('rank');
            $table->string('origin')->nullable()->default('unknown');
            $table->timestamps();

            $table->bigInteger('tavern_id')->unsigned();
            $table->bigInteger('user_id')->unsigned()->nullable();

            $table->foreign('tavern_id')->references('id')->
                on('taverns')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('user_id')->references('id')->
                on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adventurers');
    }
}
