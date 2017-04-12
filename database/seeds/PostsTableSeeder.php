<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'name'=>'test',
        	'content'=>'simplon cest trop cool',
        	'user_id'=>1,
        	'publier'=>1,
            'slug'=>'post-1',
            'created_at'=>null,
            'updated_at'=>null,
        	]);
    }
}
