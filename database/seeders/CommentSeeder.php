<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    public function run()
    {
        // Hanya menambahkan data jika belum ada
        if (DB::table('comments')->where('content', 'This is a comment.')->doesntExist()) {
            DB::table('comments')->insert([
                'post_id' => 1, // Pastikan ini adalah ID yang valid dari tabel `post`
                'author' => 'John Doe',
                'content' => 'This is a comment.',
            ]);
        }
    }
}


