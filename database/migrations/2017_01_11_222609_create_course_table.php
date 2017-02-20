<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courseName')->nullable();
            $table->integer('courseNumber')->nullable();
            $table->integer('sectionNumber')->nullable();
            $table->string('semester')->nullable();
            $table->integer('finalGrade')->nullable();
            $table->integer('estimatedGrade')->nullable();
            $table->integer('rank')->nullable();
            $table->timestamps();

            // Foreign Keeys
            // $table->integer('prof_id')->default(1);
            $table->integer('nomination_id')->default(1);
        });
    }

    /**     
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('course');
    }
}
