<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionTavernTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commission_tavern', function (Blueprint $table) {
            //$table->id();
            $table->primary(['commission_id','tavern_id']);
            $table->bigInteger('commission_id')->unsigned();
            $table->bigInteger('tavern_id')->unsigned();
            $table->timestamps();

            $table->foreign('commission_id')->references('id')->
                on('commissions')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('tavern_id')->references('id')->
                on('taverns')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commission_tavern');
    }
}
