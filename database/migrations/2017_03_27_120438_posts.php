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
        $table->increments('id')->nullable(false)->change();
        $table->string('name')->nullable(false)->change();
        $table->string('slug')->nullable(false)->change();
        $table->text('content')->nullable(false)->change();
        $table->integer('counts_comment')->default(0)->nullable(false)->change();
        $table->integer('user_id')->nullable(false)->change();
        $table->integer('publier')->nullable(false)->change();
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
