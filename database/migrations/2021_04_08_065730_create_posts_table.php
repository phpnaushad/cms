<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('post_cat_id')->constrained('post_category');
			$table->foreignId('post_tag_id')->constrained('post_tags');		
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('quote');
            $table->string('image');
            $table->integer('tags');            
            $table->integer('status');
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
