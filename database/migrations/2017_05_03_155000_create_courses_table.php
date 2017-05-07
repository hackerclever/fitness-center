<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_classes_id')->unsigned();
            $table->integer('users_id')->unsigned(); //Trainner
            $table->timestamps();

            $table->foreign('users_id')
                  ->references('id')
                  ->on('users');

            $table->foreign('type_classes_id')
                  ->references('id')
                  ->on('type_classes');
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
        Schema::dropIfExists('courses');
        Schema::enableForeignKeyConstraints();
    }
}
