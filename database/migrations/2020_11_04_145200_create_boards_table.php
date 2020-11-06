<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->string("title", 100);
            $table->string("description", 1000);
            $table->foreignId("article_id")->unsigned();
            $table->foreign("article_id")->references("id")->on("articles")->onDelete("cascade");
            $table->foreignId("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
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
         Schema::table('articles', function (Blueprint $table){
        $table->dropForeign(['user_id']);
        $table->dropForeign(['article_id']);
        $table->dropColumn(['user_id']);
        $table->dropColumn(['article_id']);
         });
        Schema::dropIfExists('boards');
        
    }
}
