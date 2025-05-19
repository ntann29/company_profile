<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'tanggal_prestasi', 'nama_prestasi', 'tingkat', 'deskripsi', 'foto'];
    public $timestamp   = true;

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/prestasi' . $this->foto))) {
            return unlink(public_path('storage/prestasi' . $this->foto));
        }
    }
}
