<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_customers', function (Blueprint $table) {
            $table->integer('customers_id')->unsigned();
            $table->integer('courses_id')->unsigned();

            $table->foreign('customers_id')
                  ->references('id')
                  ->on('customers');

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
        Schema::dropIfExists('course_customers');
        Schema::enableForeignKeyConstraints();
    }
}
