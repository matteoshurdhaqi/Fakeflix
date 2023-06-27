<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public static $arrayFilms = [
        [
            'id' => 1,
            'title' => 'interstellar',
            'cover' => '/img/esercizio/interstellar.jpg',
        ],
        [
            'id' => 2,
            'title' => 'Lord of the Rings',
            'cover' => '/img/esercizio/lotr.jpg',
        ],
        [
            'id' => 3,
            'title' => 'Matrix',
            'cover' => '/img/esercizio/matrix.jpg',
        ],
        [
            'id' => 4,
            'title' => 'il Padrino',
            'cover' => '/img/esercizio/padrino.jpg',
        ],
        [
            'id' => 5,
            'title' => 'Pulp fiction',
            'cover' => '/img/esercizio/pulp.jpg',
        ]
    ];

    public static $arraySerietv = [

        [
            'id' => 6,
            'title' => 'Breaking-bad',
            'cover' => '/img/cover/breaking-bad.jpg',
        ],
        [
            'id' => 7,
            'title' => 'Dahmer',
            'cover' => '/img/cover/dahmer.jpg',
        ],
        [
            'id' => 8,
            'title' => 'Don Matteo',
            'cover' => '/img/cover/don-matteo.jpg',
        ],
        [
            'id' => 9,
            'title' => 'friends',
            'cover' => '/img/cover/friends.jpg',
        ],
        [
            'id' => 10,
            'title' => 'House of the dragon.jpg',
            'cover' => '/img/cover/hof.jpg',
        ],
        [
            'id' => 11,
            'title' => 'The boys',
            'cover' => '/img/cover/the-boys.jpg',
        ],
        [
            'id' => 12,
            'title' => 'The office',
            'cover' => '/img/cover/the-office.jpg',
        ]
    ];

    public function index()
    {
        return view('welcome');
    }
    public function catalogoFilm()
    {
        return view('cataloguefilms', ['films' => self::$arrayFilms]);
    }
    public function show($id)
    {
        foreach (self::$arrayFilms as $film) {
            if ($film['id'] == $id) {
                return view('show', ['item' => $film]);
            }
        }
        foreach (self::$arraySerietv as $serie) {
            if ($serie['id'] == $id) {
                return view('show', ['item' => $serie]);
            }
        }
        abort(404);
    }

    public function catalogoSerie()
    {
        return view('catalogueseries', ['ciccio' => self::$arraySerietv]);
    }
}
