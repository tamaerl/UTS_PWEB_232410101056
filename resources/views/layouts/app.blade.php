<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tamaerl's Commission</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-pink-200 text-gray-800 font-sans min-h-screen flex flex-col" style="background-image: url('https://i.pinimg.com/736x/48/8d/82/488d82926f8a48cd39d7e4fafc20294e.jpg'); background-repeat: repeat; background-size: auto;">

    <x-navbar />

    <main class="flex-grow">
        <div class="max-w-6xl mx-auto p-6 mt-6">
            @yield('content')
        </div>
    </main>

    <x-footer />

</body>
</html>
