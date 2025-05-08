<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_karyawan', 'jenis_kelamin', 'tugas', 'jabatan', 'foto'];
    public $timestamp   = true;

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/karyawan' . $this->foto))) {
            return unlink(public_path('storage/karyawan' . $this->foto));
        }
    }
}
