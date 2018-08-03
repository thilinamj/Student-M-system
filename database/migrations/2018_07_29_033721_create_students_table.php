<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('sid');
            $table->string('fname');
            $table->string('lname');
            $table->string('dob');
            $table->string('nic');
            $table->integer('pnumber');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');
            $table->string('nationality');
            $table->string('sex');
            $table->string('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
