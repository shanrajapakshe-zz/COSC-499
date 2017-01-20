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
            $table->integer('nominationNo')->default(1);
            $table->string('name')->nullable();
            $table->integer('courseNumber')->nullable();
            $table->integer('section');
            $table->string('semester')->nullable();
            $table->integer('grade')->nullable();
            $table->integer('estimatedGrade')->nullable();
            $table->integer('estimatedRank')->nullable();
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
