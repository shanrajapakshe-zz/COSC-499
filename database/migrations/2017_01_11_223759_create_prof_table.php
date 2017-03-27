<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('prof', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('firstName');
        //     $table->string('lastName');
        //     $table->string('email')->unique()->nullable();
        //     $table->string('password')->default($password = bcrypt('unit5'));
        //     $table->timestamps();
        //     $table->rememberToken();
        //     $table->softDeletes();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('prof');
    }
}
