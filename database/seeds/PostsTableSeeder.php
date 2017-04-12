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
        	'name'=>'test 1',
        	'content'=>'simplon cest trop cool',
        	'user_id'=>1,
        	'publier'=>1,
            'slug'=>'post-1',
            'created_at'=>'2016-04-06 17:35:36',
            'updated_at'=>'2016-04-06 17:35:36',
        	]);
        DB::table('posts')->insert([
            'name'=>'test 2',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-2',
            'created_at'=>'2015-04-06 17:35:36',
            'updated_at'=>'2015-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 3',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-3',
            'created_at'=>'2014-04-06 17:35:36',
            'updated_at'=>'2014-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 4',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-4',
            'created_at'=>'2013-04-06 17:35:36',
            'updated_at'=>'2013-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 5',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-5',
            'created_at'=>'2012-04-06 17:35:36',
            'updated_at'=>'2012-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 6',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-6',
            'created_at'=>'2011-04-06 17:35:36',
            'updated_at'=>'2011-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 7',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-7',
            'created_at'=>'2011-04-06 17:35:36',
            'updated_at'=>'2011-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 8',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-8',
            'created_at'=>'2011-04-06 17:35:36',
            'updated_at'=>'2011-04-06 17:35:36',
            ]);
        DB::table('posts')->insert([
            'name'=>'test 9',
            'content'=>'simplon cest trop cool',
            'user_id'=>1,
            'publier'=>1,
            'slug'=>'post-9',
            'created_at'=>'2011-04-06 17:35:36',
            'updated_at'=>'2011-04-06 17:35:36',
            ]);
    }
}
