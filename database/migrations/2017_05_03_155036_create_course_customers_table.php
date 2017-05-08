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
            $table->integer('customer_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->timestamps();

            $table->foreign('customer_id')
                  ->references('id')
                  ->on('customers');

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
        Schema::dropIfExists('course_customers');
        Schema::enableForeignKeyConstraints();
    }
}
