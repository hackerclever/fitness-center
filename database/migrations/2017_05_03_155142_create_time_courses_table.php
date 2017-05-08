<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_courses', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->string('day',3);
            $table->integer('startTime');
            $table->integer('endTime');
            $table->timestamps();

            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('time_courses');
        Schema::enableForeignKeyConstraints();
    }
}
