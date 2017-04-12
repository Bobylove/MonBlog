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
        $table->increments('id')->nullable(true);
        $table->string('name')->nullable(true);
        $table->string('slug')->nullable(true);
        $table->text('content')->nullable(true);
        $table->integer('counts_comment')->default(0);
        $table->integer('user_id')->nullable(true);
        $table->integer('publier')->nullable(true);
        $table->timestamps()->nullable(true);
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
