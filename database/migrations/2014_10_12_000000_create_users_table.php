<?php
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable(false)->change();
            $table->string('firstname')->nullable(false)->change();
            $table->string('lastname')->nullable(false)->change();
            $table->string('email')->unique()->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->rememberToken()->nullable(false)->change();
            $table->boolean('is_admin')->default('0');
            $table->timestamps()->nullable(false)->change();
        });
        User::create([
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'is_admin'=>true,
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
