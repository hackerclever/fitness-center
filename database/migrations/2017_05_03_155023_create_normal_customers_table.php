<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNormalCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_customers', function (Blueprint $table) {
            $table->integer('customers_id')->unsigned();
            $table->date('startTime');
            $table->date('expire');

            $table->foreign('customers_id')
                  ->references('id')
                  ->on('customers');

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
        Schema::dropIfExists('normal_customers');
        Schema::enableForeignKeyConstraints();
    }
}
