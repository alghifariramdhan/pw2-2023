<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawsank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'Sherina',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Indonesia',
            'tahun' => 2017,
            'rating' => 7.8,
        ],
        [
            'no' => 3,
            'judul' => 'Black Adam',
            'poster' => 'image.png',
            'genre' => 'Adventure',
            'negara' => 'Amerika  Serikat',
            'tahun' => 2022,
            'rating' => 7.1,
        ],
        [
            'no' => 4,
            'judul' => 'Athena',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'Prancis',
            'tahun' => 2022,
            'rating' => 7.8,
        ]
    ];

    public function getAllmovies()
    {
        return $this ->movies;
    }
}
