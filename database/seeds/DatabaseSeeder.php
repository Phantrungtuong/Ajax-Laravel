<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('comment');
    }
}

class key extends Seeder{
    public function run(){
        DB::table('keys')->insert([
            array('key'=>'Key 1'),
        ]);
    }
}

class lock extends Seeder{
    public  function run(){
        DB::table('locks')->insert([
            array('lock'=>'Lock 1', 'key_id'=> 1)
        ]);
    }
}

class post extends Seeder{
    public function run(){
        DB::table('posts')->insert([
            array('title'=>'Title 1', 'description'=>"Đây là bài Post 1")
        ]);
    }
}

class comment extends Seeder{
    public function run(){
        DB::table('comments')->insert([
            array('post_id' => 1, 'comment'=>'Comment 1'),
            array('post_id' => 1, 'comment'=>'Comment 2'),
        ]);
    }
}