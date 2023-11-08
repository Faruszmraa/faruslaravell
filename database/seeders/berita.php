<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class berita extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul_berita' => 'Akriditasi Prodi Keamanan Jaringan Menaik',
            'isi_berita' => 'Prodi Keamanan Jaringan Jurusan Teknik Informatika di Polbeng Menaik, ini mengartikan bertambah banyaknya minat mahasiswa pada Prodi Keamanan Sistem Informasi'
        ]);
    }
}
