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
            $table->increments('id');
            $table->string('username', 100);
            $table->string('name');
            $table->string('last_name', 100)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('action_token')->nullable();
            $table->string('pin', 10)->nullable();
            $table->enum('verify', ['waiting', 'yes', 'no'])->default('waiting')->nullable();
            $table->dateTime('verify_date')->nullable();
            $table->string('mobile', 25)->nullable();
            $table->enum('type', ['owner', 'staff', 'other', 'admin', 'customer', 'brand-owner'])->nullable();
            $table->enum('status', ['active', 'inactive', 'ban']);
            $table->integer('user_group_id')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthday')->nullable();
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
        Schema::dropIfExists('users');
    }
}
