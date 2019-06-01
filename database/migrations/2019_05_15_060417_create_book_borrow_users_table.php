<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBorrowUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_borrow_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('borrowing_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_id');
            $table->datetime("borrow_date");
            $table->datetime("return_date");
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
        Schema::dropIfExists('book_borrow_users');
    }
}
