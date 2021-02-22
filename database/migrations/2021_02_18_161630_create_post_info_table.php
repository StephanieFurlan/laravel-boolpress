<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_infos', function (Blueprint $table) {
            // id - primary key
            $table->id();
            // id - foreign key
            $table->unsignedBigInteger('post_id');
            // stato del post
            $table->string('post_status', 7);
            // comment status
            $table->string('comment_status', 7);
            // comment content
            $table->string('content', 50);
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
        Schema::dropIfExists('post_infos');
    }
}
