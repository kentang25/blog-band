<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    /** @use HasFactory<\Database\Factories\KatalogFactory> */
    use HasFactory;

    protected $table = 'tb_katalog';

    protected $fillable = [
        'title',
        'slug',
        'gambar',
        'size'
    ];
}
