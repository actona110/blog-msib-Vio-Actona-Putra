<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Ganti dengan atribut yang sesuai
        // Tambahkan atribut lain yang ingin diisi
    ];
}

