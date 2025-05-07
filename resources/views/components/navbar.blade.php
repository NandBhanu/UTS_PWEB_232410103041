<nav class="bg-blue-600 text-white px-6 py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/dashboard" class="text-xl font-bold">FilmApp</a>
        <ul class="flex space-x-6">
            <li><a href="{{ route('dashboard', ['username' => $username ?? request()->query('username')]) }}"
                class="hover:underline {{ request()->routeIs('profile') ? 'underline' : '' }}" class="hover:underline">Dashboard</a></li>
            <li><a href="{{ route('pengelolaan') }}" class="hover:underline">Rekomendasi</a></li>
            <li><a href="{{ route('profile', ['username' => $username ?? request()->query('username')]) }}"
                class="hover:underline {{ request()->routeIs('profile') ? 'underline' : '' }}">
               Profile
             </a></li>
            <li><a href="/login" class="hover:underline text-red-300">Logout</a></li>
        </ul>
    </div>
</nav>
