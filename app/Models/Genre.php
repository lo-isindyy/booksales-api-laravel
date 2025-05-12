<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'name' => 'Sejarah',
            'description' => 'Genre yang mengangkat tema sejarah dan kehidupan masa lalu, baik nyata maupun fiksi.',
        ],
        [
            'name' => 'Romansa',
            'description' => 'Genre yang berfokus pada hubungan cinta dan perkembangan kisah romantis antara tokoh utama.',
        ],
        [
            'name' => 'Fantasi',
            'description' => 'Genre yang menampilkan elemen-elemen magis, dunia khayalan, dan makhluk mitos di luar realitas.',
        ],
        [
            'name' => 'Misteri',
            'description' => 'Genre yang menghadirkan cerita dengan unsur teka-teki, kejahatan, dan proses pengungkapan rahasia.',
        ],
        [
            'name' => 'Anak-anak',
            'description' => 'Genre yang dirancang khusus untuk pembaca anak-anak, dengan bahasa dan tema yang sesuai usia.',
        ]
    ];

    public function getGenres() {
        return $this->genres;
    }
}

