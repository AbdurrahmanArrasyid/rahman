<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Input_aspirasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['Kategori','siswa'];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori','id_kategori');
    }
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'nis', 'nis');
    }
}
