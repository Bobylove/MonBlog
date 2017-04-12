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
            $table->string('username')->nullable(true);
            $table->string('firstname')->nullable(true);
            $table->string('lastname')->nullable(true);
            $table->string('email')->unique()->nullable(true);
            $table->string('password')->nullable(true);
            $table->rememberToken()->nullable(true);
            $table->boolean('is_admin')->default('0');
            $table->timestamps()->nullable(true);
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
