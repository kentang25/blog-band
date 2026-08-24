<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    protected $table = 'tb_blog';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'gambar',
        'created_at',
        'updated_at'
    ];
}
