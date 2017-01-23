<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('nomination', function (Blueprint $table) {
            // Primary Key
            // $table->increments('id');
            $table->increments('id');

            // 
            $table->integer('studentNumber');
            $table->string('studentFirstName');
            $table->string('studentLastName');
            $table->string('email')->nullable();
            $table->tinyInteger('gradThisYear')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            
            // Foreign Keys
            $table->string('award_id')->default(1);
            $table->integer('prof_id')->default(2);
            // $table->integer('awardId'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('nomination');
    }
}
