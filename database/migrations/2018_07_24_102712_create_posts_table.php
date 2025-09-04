<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('examname')->unique();
            $table->text('postname')->nullable();
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->string('fees')->nullable();
            $table->string('obc')->nullable();
            $table->string('sc')->nullable();
            $table->string('female')->nullable();
            $table->string('slug');
            $table->string('user_id');
            $table->softDeletes();
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
