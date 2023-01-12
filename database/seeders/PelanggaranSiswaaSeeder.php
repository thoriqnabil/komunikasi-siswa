<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PelanggaranSiswaa;

class PelanggaranSiswaaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggaransiswaa::create([
            "dasis_id"=>1,
            "pelanggaran_id"=>1,
        ]);

        Pelanggaransiswaa::create([
            "dasis_id"=>1,
            "pelanggaran_id"=>2,
        ]);

        Pelanggaransiswaa::create([
            "dasis_id"=>2,
            "pelanggaran_id"=>1,
        ]);

        // Pelanggaransiswaa::create([
        //     "dasis_id"=>2,
        //     "pelanggaran_id"=>3,
        // ]);
    }
}
