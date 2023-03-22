<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('user_id');
            $table->string('title');
            $table->string('type');
            $table->string('topic');
            $table->string('subject')->nullable();
            $table->string('specialized')->nullable();
            $table->string('category');
            $table->longtext('content');
            $table->string('file_path')->nullable();
            $table->string('story_post')->nullable();
            $table->integer('like_count')->nullable();
            $table->integer('comment_count')->nullable();
            $table->integer('view_count')->nullable();
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
};
