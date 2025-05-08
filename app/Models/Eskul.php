<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_eskul', 'foto'];
    public $timestamp   = true;

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('storage/eskul' . $this->foto))) {
            return unlink(public_path('storage/eskul' . $this->foto));
        }
    }
}
