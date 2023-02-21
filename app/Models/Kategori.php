<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class);
    }

    public function Input_aspirasi()
    {
        return $this->hasMany(Input_aspirasi::class);
    }
}
