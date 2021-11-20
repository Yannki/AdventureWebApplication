<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text')->nullable();
            $table->timestamps();

            $table->bigInteger('adventurer_id')->unsigned();
            $table->bigInteger('commission_id')->unsigned();

            $table->foreign('adventurer_id')->references('id')->
                on('adventurers')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('commission_id')->references('id')->
                on('commissions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
