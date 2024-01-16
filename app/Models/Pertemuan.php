<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    public function detailUser()
    {
        return $this->belongsTo(detailUser::class, 'id_pertemuan', 'id');
    }
}
