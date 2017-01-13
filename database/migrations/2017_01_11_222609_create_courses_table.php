<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseName')->nullable();
            $table->string('section');
            $table->string('semester')->nullable();
            $table->string('actGrade')->nullable();
            $table->string('estGrade')->nullable();
            $table->string('estRank')->nullable();
            $table->text('description')->nullable();
            // $table->integer('awardID');
            // awardId will be part of a many-to-many relation
            $table->timestamps();
        });

    }

    /**     
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('courses');
    }
}
