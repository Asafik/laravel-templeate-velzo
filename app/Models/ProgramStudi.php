<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan oleh model ini
    protected $table = 'program_studis';

    // Menentukan kolom yang dapat diisi
    protected $fillable = [
        'kode',
        'program_studi',
        'status',
        'jenjang',
        'verifikasi_status'
    ];

    // Jika Anda menggunakan timestamp, ini otomatis mengaktifkan kolom created_at dan updated_at
    public $timestamps = true;
}
