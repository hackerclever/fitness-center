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
            $table->integer('courses_id')->unsigned();
            $table->dateTime('startTime');
            $table->dateTime('endTime');

            $table->foreign('courses_id')
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
