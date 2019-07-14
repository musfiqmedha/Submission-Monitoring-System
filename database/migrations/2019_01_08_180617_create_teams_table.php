<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_name');
            $table->string('student1')->nullable();
            $table->string('student2')->nullable();
            $table->string('student3')->nullable();
            $table->string('student4')->nullable();
            $table->string('student5')->nullable();
            $table->string('description')->nullable();
            $table->integer('course_id')->unsigned()->nullable();
            $table->string('user_id')->unsigned();
            $table->string('status')->nullable();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('user_id')->references('id')->on('users');


          
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
        Schema::dropIfExists('teams');
    }
}
