
@extends('layouts.app')
@section('title','Profile')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-700 text-white py-10 px-4">
  <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden">
    <div class="flex flex-col md:flex-row">
      <div class="flex justify-center md:justify-start p-6 bg-gradient-to-br from-blue-500 to-indigo-600">
        <div class="h-32 w-32 rounded-full bg-gray-200 overflow-hidden border-4 border-white">
          <svg class="h-full w-full text-gray-400" fill="currentColor" viewBox="0 0 24 24">
            <path d="M24 24H0V0h24v24z" fill="none"/>
            <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
          </svg>
        </div>
      </div>

      <div class="flex-1 p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Hi, {{ $username }}</h2>
        <p class="text-gray-600 mb-6">Selamat datang di halaman profil Anda. Di sini Anda dapat melihat dan memperbarui informasi akun.</p>

        <div class="space-y-4">
          <div class="flex items-center">
            <span class="w-32 font-medium text-gray-700">Username</span>
            <span class="flex-1 text-gray-900">{{ $username }}</span>
          </div>
          <div class="flex items-center">
            <span class="w-32 font-medium text-gray-700">Email</span>
            <span class="flex-1 text-gray-900">user@example.com</span>
          </div>
          <div class="flex items-center">
            <span class="w-32 font-medium text-gray-700">Member Since</span>
            <span class="flex-1 text-gray-900">May 2025</span>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
