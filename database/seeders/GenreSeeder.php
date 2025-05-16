<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Sejarah',
            'description' => 'Genre yang mengangkat tema sejarah dan kehidupan masa lalu, baik nyata maupun fiksi.'
        ]);

        Genre::create([
            'name' => 'Romansa',
            'description' => 'Genre yang berfokus pada hubungan cinta dan perkembangan kisah romantis antara tokoh utama.'
        ]);

        Genre::create([
            'name' => 'Fantasi',
            'description' => 'Genre yang menampilkan elemen-elemen magis, dunia khayalan, dan makhluk mitos di luar realitas.'
        ]);

        Genre::create([
            'name' => 'Misteri',
            'description' => 'Genre yang menghadirkan cerita dengan unsur teka-teki, kejahatan, dan proses pengungkapan rahasia.'
        ]);

        Genre::create([
            'name' => 'Anak-anak',
            'description' => 'Genre yang dirancang khusus untuk pembaca anak-anak, dengan bahasa dan tema yang sesuai usia.'
        ]);
    }
}
