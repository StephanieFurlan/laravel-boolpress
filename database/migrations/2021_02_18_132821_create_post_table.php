<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            // id del post
            $table->bigIncrements('id');
            // titolo
            $table->string('title', 50);
            // titolo
            $table->string('subtitle', 10);
            // authore del post
            $table->string('author', 30);
            // testo del post
            $table->mediumText('content');
            // data di publicazione
            $table->date('publication_date');
            // timestamps
            $table->string('img_path');
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
        Schema::dropIfExists('posts');
    }
}
