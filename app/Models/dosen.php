<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $primarykey = 'id';

    protected $fillable =[
        'nip',
        'nama_dosen',
        'nidn',
        'program_studi'
    ];
}
