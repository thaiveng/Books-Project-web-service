<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('bio')->nullable();
            $table->integer('phone_number')->length(10);
            $table->string('password');
            $table->string('photo')->default("default.png");
            $table->enum('status',[0,1])->default(0);
            $table->unsignedInteger('user_type_id')->default(2);
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
