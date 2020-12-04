<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFumiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gyousha_id');
            $table->string('gyousha_name');
            $table->timestamps();
            $table->foreign('gyousha_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fumies');
    }
}
