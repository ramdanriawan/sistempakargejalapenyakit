<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testeds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tester_id')->unsigned(); #required|exists:testers,id
            $table->float('hasil'); #required|numeric|min:0|max:100
            $table->string('keterangan', 255); #required|min:5|max:255
            $table->timestamps();

            $table->foreign('tester_id')->references('id')->on('testers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tested');
    }
}
