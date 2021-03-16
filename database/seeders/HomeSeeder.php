<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('homes')->insert([
            'deskripsi' => ' Halaman Home',
            'link' => ' https://www.educastudio.com'
        ]); 
    } 
}
