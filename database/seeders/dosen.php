<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosen extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('dosen')-> insert([
            'nip' => 198805,
            'nama_dosen' => 'Fajri Profesio Putra, M.Cs',
            'nidn' => 000705,
            'program_studi' => 'D4- Rekayasa Perangkat Lunak'
        ]);
    }
}
