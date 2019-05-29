<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBuyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_buy_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('buying_id');
            $table->datetime('buy_date');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_id');
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
        Schema::dropIfExists('book_buy_users');
    }
}
