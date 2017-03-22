<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nominee', function (Blueprint $table) {
            // Primary Key
            $table->integer('studentNumber');
            $table->primary('studentNumber');
            
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nominee');
    }
}
