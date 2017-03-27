<?php
use App\Comment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('user_id');
            $table->integer('post_id');
            $table->timestamps();
        });
       Comment::create([
        'content'=>'Un commentaire',
        'user_id'=>1,
        'post_id'=>1,
        ]);
       Comment::create([
        'content'=>'Un commentaire',
        'user_id'=>1,
        'post_id'=>1,
        ]);
       Comment::create([
        'content'=>'Un commentaire',
        'user_id'=>1,
        'post_id'=>1,
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
