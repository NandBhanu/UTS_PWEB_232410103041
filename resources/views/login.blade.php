@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-500 to-blue-600">
    <div class="bg-white shadow-md rounded-lg overflow-hidden w-full max-w-md p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">FilmApp </h2>
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login </h2>
        <form method="POST" action="{{ route('login.process') }}" class="space-y-6">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" name="username" id="username" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>


            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                Login
            </button>
        </form>

    </div>
</div>
@endsection
