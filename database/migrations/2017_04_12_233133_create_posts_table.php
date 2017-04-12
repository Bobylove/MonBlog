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
        $table->string('name');
        $table->string('slug');
        $table->text('content');
        $table->integer('counts_comment')->default(0);
        $table->integer('user_id');
        $table->integer('publier')->default(1);
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
        //
    }
}
