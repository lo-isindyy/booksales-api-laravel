<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya.jpg',
            'bio' => 'Penulis legenda Indonesia yang terkenal dengan karya-karya sejarah spektakuler, mengangkat perjuangan bangsa melalui novel-novelnya.',
        ],
        [
            'name' => 'Nicholas Sparks',
            'photo' => 'nicholassparks.jpg',
            'bio' => 'Penulis Amerika terkenal yang spesialis novel romansa yang mengharukan dan mendalam tentang cinta sejati.',
        ],
        [
            'name' => 'Neil Gaiman',
            'photo' => 'neilgaiman.jpg',
            'bio' => 'Penulis internasional berbakat yang menguasai genre fantasi dengan imajinasi luar biasa dan cerita-cerita yang memukau.',
        ],
        [
            'name' => 'Agatha Christie',
            'photo' => 'agathachristie.jpg',
            'bio' => 'Ratu misteri dunia, penulis novel detektif terkemuka dengan puluhan karya misterius yang mendebarkan.',
        ],
        [
            'name' => 'Enid Blyton',
            'photo' => 'enidblyton.jpg',
            'bio' => 'Penulis Inggris terkenal yang menghasilkan ratusan buku anak-anak yang menghibur dan mendidik.',
        ]
    ];

    public function getAuthors() {
        return $this->authors;
    }
}
