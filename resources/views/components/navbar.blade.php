<nav class="bg-pink-500 shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

        <a href="{{ url('/?username='. request()->query('username')) }}" class="text-white font-serif text-xl">
            Tamaerl's Art Commission
        </a>
        <div class="space-x-4">
            <a href="{{ url('/dashboard?username='. request()->query('username')) }}" class="text-white font-sans hover:text-pink-100 transition">Home</a>
            <a href="{{ url('/pengelolaan?username='. request()->query('username')) }}" class="text-white font-sans hover:text-pink-100 transition">Waitlist</a>
            <a href="{{ url('/profile?username='. request()->query('username')) }}" class="text-white font-sans hover:text-pink-100 transition">Profil</a>
        </div>
    </div>
</nav>
