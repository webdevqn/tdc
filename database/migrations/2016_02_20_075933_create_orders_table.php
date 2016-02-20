<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('seller')->unsigned();
            $table->foreign('seller')->references('id')->on('users');
            $table->integer('buyer')->unsigned();
            $table->foreign('buyer')->references('id')->on('users');
            $table->double('amount')->unsigned()->default(0);
            $table->double('tax')->unsigned()->default(0);
            $table->string('receiver_name');
            $table->string('content')->nullable();
            $table->string('address1');
            $table->string('address2');
            $table->string('phone1');
            $table->string('phone2');
            $table->date('ship_date');
            $table->string('ship_email');
            $table->enum('ship_status', ['saving', 'paying', 'delivering', 'receiving', 'cancelling']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
