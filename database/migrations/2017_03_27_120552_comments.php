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
            $table->increments('id')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->integer('user_id')->nullable(false)->change();
            $table->integer('post_id')->nullable(false)->change();
            $table->timestamps()->nullable(false)->change();
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
