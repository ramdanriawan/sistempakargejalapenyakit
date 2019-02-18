<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tester_id')->unsigned(); #required|exists:testers,id
            $table->integer('gejala_id')->unsigned(); #required|exists:gejalas,id
            $table->enum('jawaban', ['tidak', 'tidak lagi', 'sedikit', 'sedang', 'parah']); #required|in:tidak, tidak lagi, sedikit, sedang, parah
            $table->float('hasil'); #required|numeric|min:0|max:100
            $table->timestamps();

            $table->foreign('tester_id')->references('id')->on('testers')->onDelete('cascade');
            $table->foreign('gejala_id')->references('id')->on('gejalas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
