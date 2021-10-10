<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('customer');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('sex', ['L', 'P'])->nullable();
            $table->date('dob')->nullable();
            $table->string('google_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->mediumInteger('city_id')->nullable();
            $table->text('avatar')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('is_verified_tutor')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
