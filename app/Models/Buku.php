<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table ='bukus';

    protected $fillable =[
        'gambar',
        'kode_buku',
        'judul_buku',
        'penulis',
        'penerbit',
        'kategori',
        'deskripsi',
        'tahun_terbit'
    ];
}
