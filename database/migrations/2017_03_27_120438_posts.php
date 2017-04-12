<?php
use App\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
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
        $table->integer('publier');
        $table->timestamps();
    });
    Post::create([
        'name'=>'Post 1',
        'content'=>'lorem ipsum',
        'counts_comment'=>0,
        'user_id'=>1,
        'slug'=>'post',
        ]);
       
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
