<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // id - primary key
            $table->id();
            // id - foreign key
            $table->unsignedBigInteger('post_id');
            // autore del post
            $table->string('author', 30);
            // data del commento
            $table->date('comment_date', 7);
            // comment content
            $table->text('content');
            // foreign-key post_id
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
