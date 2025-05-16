<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya.jpg',
            'bio' => 'Penulis legenda Indonesia yang terkenal dengan karya-karya sejarah spektakuler, mengangkat perjuangan bangsa melalui novel-novelnya.'
        ]);

        Author::create([
            'name' => 'Nicholas Sparks',
            'photo' => 'nicholassparks.jpg',
            'bio' => 'Penulis Amerika terkenal yang spesialis novel romansa yang mengharukan dan mendalam tentang cinta sejati.'
        ]);

        Author::create([
            'name' => 'Neil Gaiman',
            'photo' => 'neilgaiman.jpg',
            'bio' => 'Penulis internasional berbakat yang menguasai genre fantasi dengan imajinasi luar biasa dan cerita-cerita yang memukau.'
        ]);

        Author::create([
            'name' => 'Agatha Christie',
            'photo' => 'agathachristie.jpg',
            'bio' => 'Ratu misteri dunia, penulis novel detektif terkemuka dengan puluhan karya misterius yang mendebarkan.'
        ]);

        Author::create([
            'name' => 'Enid Blyton',
            'photo' => 'enidblyton.jpg',
            'bio' => 'Penulis Inggris terkenal yang menghasilkan ratusan buku anak-anak yang menghibur dan mendidik.'
        ]);
    }
}
