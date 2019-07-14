<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['name'=>'Andres Aparicio','email'=>'andresap2150@gmail.com', 'password'=>'secret'],
        	['name'=>'Andres llano', 'email'=>'andres@r2diesel.com','password'=>'secret'],
        	['name'=>'Ercet Cassanova', 'email'=>'ercet.casanova@globant.com','password'=>'secret'],
        	['name'=>'Viviana Ospitia', 'email'=>'vivi1857@hotmail.com','password'=>'secret'],
        	['name'=>'Andres Aparicio Estudio', 'email'=>'adaparicio@unipanamericana.edu.do','password'=>'secret']
        ]);
    }
}
