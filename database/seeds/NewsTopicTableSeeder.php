<?php

use Illuminate\Database\Seeder;

class NewsTopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_topic')->insert([
            ['news_id'=>1,'topic_id'=>2]
        ]);
    }
}
