<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Bumi Manusia',
            'description' => 'Novel sejarah yang mengisahkan perjuangan manusia di masa kolonial, menggambarkan dinamika sosial dan perlawanan terhadap penindasan.',
            'price' => 85000,
            'stock' => 50,
            'cover_photo' => 'bumi_manusia.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'The Notebook',
            'description' => 'Kisah cinta abadi yang memotret perjalanan cinta sejati melewati berbagai rintangan dan waktu.',
            'price' => 95000,
            'stock' => 40,
            'cover_photo' => 'the_notebook.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'Neverwhere',
            'description' => 'Petualangan fantastis di London bawah tanah yang penuh misteri, makhluk ajaib, dan dunia tersembunyi.',
            'price' => 110000,
            'stock' => 30,
            'cover_photo' => 'neverwhere.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'Murder on the Orient Express',
            'description' => 'Misteri klasik yang melibatkan pembunuhan misterius di kereta api Orient Express, diselesaikan oleh detektif terkenal Hercule Poirot.',
            'price' => 75000,
            'stock' => 45,
            'cover_photo' => 'orient_express.jpg',
            'genre_id' => 4,
            'author_id' => 4
        ]);

        Book::create([
            'title' => 'The Magic Faraway Tree',
            'description' => 'Petualangan mengasyikkan sekelompok anak-anak di hutan ajaib dengan pohon yang penuh keajaiban dan dunia-dunia yang selalu berubah.',
            'price' => 65000,
            'stock' => 60,
            'cover_photo' => 'magic_faraway_tree.jpg',
            'genre_id' => 5,
            'author_id' => 5
        ]);
    }
}
