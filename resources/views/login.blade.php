@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow ">
    <h2 class="text-2xl font-serif text-pink-600 mb-6">Login</h2>
    <form method="POST" action="{{ route('doLogin') }}" class="space-y-4">
        @csrf

        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" name="username" id="username" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring-pink-400 focus:border-pink-400">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded shadow-sm focus:outline-none focus:ring-pink-400 focus:border-pink-400">
        </div>

        <button type="submit"
                class="w-full bg-pink-400 text-white py-2 px-4 rounded hover:bg-sky-300 transition duration-200">
            Login
        </button>
    </form>
</div>
@endsection
