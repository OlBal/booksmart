<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100);
            
        });

        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();

            //articles_id column
            $table->foreignId("article_id")->unsigned();
            $table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade");

            //tags_id column
            $table->foreignId("tag_id")->unsigned();
            $table->foreign("tag_id")->references("id")->on("tags")->onDelete("cascade");
         });        
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("article_tag");
        Schema::dropIfExists("tags");
    }
}
