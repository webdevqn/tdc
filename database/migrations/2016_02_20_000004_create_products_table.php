<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->double('price')->unsigned()->default(0);
            $table->double('weight')->unsigned()->nullable()->default(0);
            $table->double('length')->unsigned()->nullable()->default(0);
            $table->double('width')->unsigned()->nullable()->default(0);
            $table->double('height')->unsigned()->nullable()->default(0);
            $table->text('color')->nullable();
            $table->date('expired_date')->nullable();
            $table->text('origin')->nullable();
            $table->integer('currency')->nullable();
            $table->integer('per_unit')->unsigned()->nullable()->default(0);
            $table->integer('in_stock')->unsigned()->nullable()->default(0);
            $table->integer('on_order')->unsigned()->nullable()->default(0);
            $table->integer('sold')->unsigned()->nullable()->default(0);
            $table->integer('viewed')->unsigned()->nullable()->default(0);
            $table->integer('liked')->unsigned()->nullable()->default(0);
            $table->integer('followed')->unsigned()->nullable()->default(0);
            $table->integer('shared')->unsigned()->nullable()->default(0);
            $table->integer('points')->unsigned()->nullable()->default(0);
            $table->integer('ranked')->unsigned()->nullable()->default(0);
            $table->double('discount_amount')->unsigned()->nullable()->default(0);
            $table->date('start_date_discount')->nullable();
            $table->date('end_date_discount')->nullable();
            $table->text('discount_content')->nullable();
            $table->enum('status', ['on', 'off']);
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            $table->integer('updated_by')->unsigned();
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::drop('products');
    }
}
