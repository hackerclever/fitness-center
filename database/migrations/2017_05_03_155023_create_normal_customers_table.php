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
            $table->integer('customer_id')->unsigned();
            $table->date('startTime')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('expire');
            $table->timestamps();


            $table->foreign('customer_id')
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
