<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'email'=>'admin@admin.com',
        	'password'=>bcrypt('simplon'),
            'is_admin'=>1,
        	]);
        DB::table('users')->insert([
            'email'=>'guest1@admin.com',
            'password'=>bcrypt('simplon'),
            'is_admin'=>0,
            ]);
        DB::table('users')->insert([
            'email'=>'guest2@admin.com',
            'password'=>bcrypt('simplon'),
            'is_admin'=>0,
            ]);
        DB::table('users')->insert([
            'email'=>'guest3@admin.com',
            'password'=>bcrypt('simplon'),
            'is_admin'=>0,
            ]);
    }
}
