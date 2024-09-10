<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post'; // Nama tabel yang digunakan adalah 'post'

    protected $fillable = [
        'title',
        'content',
    ];

    // Relasi dengan model Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
