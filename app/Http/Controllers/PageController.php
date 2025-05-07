<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginForm()
    {
        return view('login');
    }

    public function loginProcess(Request $req)
    {
        $user = $req->username;
        return redirect()->route('dashboard', ['username' => $user]);
    }

    public function profile(Request $req)
    {

        $username = $req->query('username');
        return view('profile', compact('username'));
    }



    private function getFilms()
    {
        return [
            ['judul' => 'Inception',        'genre' => 'Sci-Fi',    'rating' => 8.8],
            ['judul' => 'Parasite',         'genre' => 'Thriller',  'rating' => 8.6],
            ['judul' => 'Interstellar',     'genre' => 'Sci-Fi',    'rating' => 8.6],
            ['judul' => 'The Godfather',    'genre' => 'Crime',     'rating' => 9.2],
            ['judul' => 'Whiplash',         'genre' => 'Drama',     'rating' => 8.5],
            ['judul' => 'The Dark Knight',  'genre' => 'Action',    'rating' => 9.0],
            ['judul' => 'Fight Club',       'genre' => 'Drama',     'rating' => 8.8],
            ['judul' => 'Pulp Fiction',     'genre' => 'Crime',     'rating' => 8.9],
            ['judul' => 'Avengers: Endgame','genre' => 'Action',    'rating' => 8.4],
            ['judul' => 'The Matrix',       'genre' => 'Sci-Fi',    'rating' => 8.7],
            ['judul' => 'Spirited Away',    'genre' => 'Fantasy',   'rating' => 8.6],
            ['judul' => 'The Shawshank Redemption', 'genre' => 'Drama', 'rating' => 9.3],
            ['judul' => 'Forrest Gump',     'genre' => 'Drama',     'rating' => 8.8],
            ['judul' => 'Joker',            'genre' => 'Thriller',  'rating' => 8.4],
            ['judul' => 'The Lion King',    'genre' => 'Animation', 'rating' => 8.5],
        ];
    }

    public function dashboard(Request $req)
    {
        $username = $req->query('username', 'Guest');
        $filmsAll = $this->getFilms();
        $stats = [
            'total'         => count($filmsAll),
            'genre_populer' => collect($filmsAll)
                                 ->pluck('genre')
                                 ->countBy()
                                 ->sortDesc()
                                 ->keys()
                                 ->first(),
        ];
        $random = $filmsAll;
        shuffle($random);
        $randomFilms = array_slice($random, 0, 4);
        return view('dashboard', compact('username','stats','randomFilms'));
    }

    public function pengelolaan(Request $req)
    {
        $username = $req->session()->get('username', 'Guest');

        $films = $this->getFilms();

        $groupedFilms = collect($films)->groupBy('genre');

        return view('pengelolaan', compact('username','groupedFilms'));
    }


    public function rekomendasi(Request $req)
    {
        $genre = $req->query('genre');
        $films = $this->getFilms();

        if ($genre) {
            $films = array_filter($films, function ($film) use ($genre) {
                return $film['genre'] === $genre;
            });
        }

        return view('rekomendasi', compact('films', 'genre'));
    }


}
