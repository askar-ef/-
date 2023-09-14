<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $buku = Buku::create([
        //     "judul" => "Angin",
        //     "penulis" => "Nana",
        //     "harga" => 80000,
        //     "tgl_terbit" => "2023-12-22"
        // ]);

        Buku::factory(14)->create();
    }
}
