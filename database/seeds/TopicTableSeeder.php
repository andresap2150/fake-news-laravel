<?php

use Illuminate\Database\Seeder;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            ['TopicName'=>'espectaculo'],
            ['TopicName'=>'politica'],
            ['TopicName'=>'deportes'],
        ]);
    }
}
