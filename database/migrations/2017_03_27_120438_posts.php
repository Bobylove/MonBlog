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
        $table->increments('id')->nullable(false);
        $table->string('name')->nullable(false);
        $table->string('slug')->nullable(false);
        $table->text('content')->nullable(false);
        $table->integer('counts_comment')->default(0);
        $table->integer('user_id')->nullable(false);
        $table->integer('publier')->nullable(false);
        $table->timestamps()->nullable(false);
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
