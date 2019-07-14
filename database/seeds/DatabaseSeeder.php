<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(TopicTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(UserTopicTableSeeder::class);
        $this->call(NewsTopicTableSeeder::class);
    }
}
