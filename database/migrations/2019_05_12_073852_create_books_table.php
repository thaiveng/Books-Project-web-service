<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('book_id');
            $table->string('book_title');
            $table->string('author');
            $table->string('book_image');
            $table->enum('availibility',[0,1])->default(0);
            $table->string('description');
            $table->unsignedInteger('cat_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_type_id');
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
        Schema::dropIfExists('books');
    }
}
