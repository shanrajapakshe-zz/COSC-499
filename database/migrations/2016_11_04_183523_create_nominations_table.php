<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('studentNum');
            $table->string('studentFirstName');
            $table->string('studentLastName');
            $table->string('course');
            $table->string('section');
            $table->string('actGrade');
            $table->string('estGrade');
            $table->string('estRank');
            $table->text('description');
            $table->integer('awardID');

            $table->timestamps();

            // Add other parts of table to store
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('nominations');
    }
}
