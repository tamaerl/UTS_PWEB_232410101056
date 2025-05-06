@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="max-wd-92 mx-auto bg-white p-10 rounded-lg shadow">
    <h2 class="text-2xl font-serif text-pink-600 mb-4">Profile</h2>
    <div class="text-gray-700">
        <p><span class="font-sans">Username:</span> {{ $username ?? 'Guest' }}</p>
        <p>Twitter: https://twitter.com/temseru</p>
        <p>Discord: https://discord.com/users/379035701372649474</p>
        <p>Instagram: https://www.instagram.com/danish_elm</p>
        <p>Email: tamaeruu@gmail.com</p>
    </div>
</div>
@endsection
