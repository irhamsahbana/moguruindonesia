<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('unique_code')->unique();
            $table->foreignId('customer_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->foreignId('tutor_id')->nullable()->references('id')->on('users')->onDelete('set null');
            $table->foreignId('subject_id')->nullable()->references('id')->on('subjects')->onDelete('set null');
            $table->enum('type', ['direct', 'indirect']);
            $table->enum('status', ['waiting', 'accepted', 'rejected', 'canceled', 'completed']); 
            $table->date('start_date');
            $table->string('num_meets');
            $table->string('num_people');
            $table->boolean('is_customer_payed')->default(false);
            $table->boolean('is_tutor_payed')->default(false);
            $table->integer('fee');
            $table->enum('learning_method', ['online', 'offline']);
            $table->string('customer_name');
            $table->string('phone');
            $table->string('address');
            $table->tinyInteger('rating')->nullable();
            $table->string('comment')->nullable();
            $table->string('additional_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
