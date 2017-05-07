<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVIPCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_i_p_customers', function (Blueprint $table) {
            $table->integer('customers_id')->unsigned();
            $table->integer('count');

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
        Schema::dropIfExists('v_i_p_customers');
        Schema::enableForeignKeyConstraints();
    }
}
