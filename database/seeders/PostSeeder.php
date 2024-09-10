<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Hanya menambahkan data jika belum ada
        if (DB::table('post')->where('title', 'Sample Post Title')->doesntExist()) {
            DB::table('post')->insert([
                'title' => 'Sample Post Title',
                'content' => 'This is a sample post content.',
            ]);
        }
    }
}


