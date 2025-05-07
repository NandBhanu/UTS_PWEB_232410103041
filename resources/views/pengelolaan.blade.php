@extends('layouts.app')

@section('title','Pengelolaan Film')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-700 text-white py-10 px-6">
  <div class="px-6 py-8">
    @foreach($groupedFilms as $genre => $films)
      <h2 class="text-2xl font-semibold mb-2">{{ $genre }}</h2>
      <div class="flex space-x-4 overflow-x-auto pb-4 mb-6">
        @foreach($films as $film)
          <div class="flex-none bg-white rounded-lg shadow p-4 min-w-[200px] hover:shadow-lg transition">
            <h3 class="text-lg font-bold text-gray-900 mb-2">
              {{ $film['judul'] }}
            </h3>
            <p class="text-sm text-gray-600">
              Rating: {{ $film['rating'] ?? '-' }}
            </p>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
</div>
@endsection
