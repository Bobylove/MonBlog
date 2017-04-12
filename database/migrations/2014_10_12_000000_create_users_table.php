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
            $table->increments('id')->nullable(false)->change();
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password')->nullable(false)->change();
            $table->rememberToken();
            $table->boolean('is_admin')->default('0')->nullable(false)->change();
            $table->timestamps();
        });
        User::create([
            'id'=>1,
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
