<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class DasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Dasis::factory(3)->create();

        // DB::table('dases')->insert([
        //     'id' => '',
        //     'nama' => 'Thoriq Nabil Mumtaz',
        //     'kelas' => 'XI',
        //     'jurusan' => 'PPLG',
        //     'nisn' => '123456',
        //     'jeniskelamin' => 'Laki Laki',
        //     'alamat' => 'askdjask',
        //     'notelp' => '01822632',
        //     'email' => 'asd@asd.li',
        //     'password' => 'qihdeu',
        //     'walikelas' => 'sinta nuralifah',
        // ]);

        
    }
    
}
