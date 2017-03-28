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
            $table->increments('id');
            $table->string('description',3200)->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign Keys
            $table->string('award_id');
            $table->integer('user_id');
            # for nominee table
            $table->integer('studentNumber');
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
