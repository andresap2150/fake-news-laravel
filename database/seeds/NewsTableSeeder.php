<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
        	['title'=>'Leonel Alvarez piensa lanzarse como candidato a la alcaldia', 'content'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit quis, placerat massa lacinia commodo faucibus tortor ultricies pulvinar luctus, ut lacus vehicula hendrerit est imperdiet hac. Iaculis cubilia imperdiet vitae etiam curabitur pellentesque nascetur rhoncus libero cum, viverra habitasse vestibulum scelerisque auctor dis nisi taciti sed morbi, congue per curae convallis inceptos volutpat nostra facilisis mattis. Habitant fusce commodo nulla tempor fames ad hendrerit inceptos magnis, metus dapibus sed convallis libero congue senectus gravida vel, quisque volutpat ac tempus sapien ridiculus bibendum odio.']
        ]);
    }
}
