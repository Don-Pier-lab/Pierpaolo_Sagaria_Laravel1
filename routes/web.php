<?php

use Illuminate\Support\Facades\Route;

$team = [
    ['name' => 'Stan', 'surname' => 'Lee', 'role' => 'Creatore'],
    ['name' => 'Kevin', 'surname' => 'Feige', 'role' => 'Presidente Marvel Studios'],
    ['name' => 'James', 'surname' => 'Gunn', 'role' => 'Regista'],
];

$movies = [
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

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo', function () use ($team) {
    return view('about-us', ['team' => $team]);
})->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function ($name) use ($team) {
    foreach ($team as $member) {
        if ($name == $member['name']) {
            return view('about-us-detail', ['member' => $member]);
        }
    }
    abort(404);
})->name('aboutUs.detail');

Route::get('/servizi', function () use ($movies) {
    return view('movie.movies', ['movies' => $movies]);
})->name('movies');

Route::get('/movie/detail/{id}', function ($id) use ($movies) {
    foreach ($movies as $movie) {
        if ($id == $movie['id']) {
            return view('movie.movie-detail', ['movie' => $movie]);
        }
    }
    abort(404);
})->name('movie.detail');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');