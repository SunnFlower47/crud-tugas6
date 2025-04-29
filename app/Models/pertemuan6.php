<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertemuan6 extends Model
{
    use HasFactory;

    protected $table = 'pertemuan6s';
    protected $fillable = [
        'nim',
        'nama',
        'jurusan'
    ];
    // Removed the incorrect property
}
