<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailUser extends Model
{
    use HasFactory;
    public function pertemuan()
    {
        return $this->hasMany(Pertemuan::class, 'id_detail', 'id');
    }

}
