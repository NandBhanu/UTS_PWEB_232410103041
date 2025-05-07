@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-700 text-white py-10 px-4">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl font-bold mb-6">🎬 Dashboard FilmApp</h1>
        <p class="text-xl mb-8">
          Selamat datang,
          <span class="font-semibold text-yellow-400">{{ $username }}</span>!
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 hover:scale-105 transition">
                <h2 class="text-xl font-bold mb-2">🎥 Total Film</h2>
                <p class="text-3xl font-bold">{{ $stats['total'] }}</p>
            </div>
            <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 hover:scale-105 transition">
                <h2 class="text-xl font-bold mb-2">📂 Kategori</h2>
                <p class="text-3xl font-bold">{{ $stats['genre_populer'] }}</p>
            </div>
            <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 hover:scale-105 transition">
                <h2 class="text-xl font-bold mb-2">👤 Pengguna</h2>
                <p class="text-3xl font-bold">1</p>
            </div>
        </div>
        <h2 class="text-2xl font-semibold mt-12 mb-4">🎞️ Rekomendasi Film untuk Anda</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($randomFilms as $film)
            <div class="bg-white text-gray-800 rounded-xl shadow-md p-5 hover:shadow-lg transition">
                <h3 class="text-lg font-bold mb-1">{{ $film['judul'] }}</h3>
                <p class="text-sm mb-2"><span class="font-semibold">Genre:</span> {{ $film['genre'] }}</p>
                <p class="text-sm"><span class="font-semibold">Rating:</span> {{ $film['rating'] }}/10</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
