<?php

namespace App\Http\Controllers;

class MovieController extends Controller
{
    private $movies = [
        [
            'id' => 1,
            'title' => 'Guardiani della Galassia',
            'director' => 'James Gunn',
            'genre' => 'Avventura',
            'year' => 2014,
            'image' => 'guardiani-1.jpg',
            'plot' => "Peter Quill forma un gruppo improbabile di eroi cosmici per fermare un fanatico deciso a dominare l'universo.",
        ],
        [
            'id' => 2,
            'title' => 'Guardiani della Galassia Vol. 2',
            'director' => 'James Gunn',
            'genre' => 'Avventura',
            'year' => 2017,
            'image' => 'guardiani-2.jpg',
            'plot' => "I Guardiani scoprono i segreti sull'origine di Peter Quill mentre nuove minacce mettono alla prova la loro famiglia.",
        ],
        [
            'id' => 3,
            'title' => 'Guardiani della Galassia Vol. 3',
            'director' => 'James Gunn',
            'genre' => 'Avventura',
            'year' => 2023,
            'image' => 'guardiani-3.jpg',
            'plot' => "La squadra parte per un'ultima missione pericolosa per salvare la vita di Rocket e proteggere la galassia.",
        ],
        [
            'id' => 4,
            'title' => 'Avengers: Infinity War',
            'director' => 'Fratelli Russo',
            'genre' => 'Supereroi',
            'year' => 2018,
            'image' => 'infinity-war.jpg',
            'plot' => "Gli Avengers e i loro alleati si uniscono per fermare Thanos prima che devasti l'intero universo.",
        ],
        [
            'id' => 5,
            'title' => 'Avengers: Endgame',
            'director' => 'Fratelli Russo',
            'genre' => 'Supereroi',
            'year' => 2019,
            'image' => 'endgame.jpg',
            'plot' => "Dopo la devastazione provocata da Thanos, gli eroi rimasti tentano l'impossibile per ribaltare il destino dell'universo.",
        ],
    ];

    public function index()
    {
        return view('movie.movies', ['movies' => $this->movies]);
    }

    public function show($id)
    {
        foreach ($this->movies as $movie) {
            if ($id == $movie['id']) {
                return view('movie.movie-detail', ['movie' => $movie]);
            }
        }
        abort(404);
    }
}