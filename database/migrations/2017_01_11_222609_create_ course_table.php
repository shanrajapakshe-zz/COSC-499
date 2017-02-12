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
            $table->string('courseName0')->nullable();
            $table->integer('courseNumber0')->nullable();
            $table->integer('sectionNumber0')->nullable();
            $table->string('semester')->nullable();
            $table->integer('finalGrade0')->nullable();
            $table->integer('estimatedGrade0')->nullable();
            $table->integer('rank0')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
