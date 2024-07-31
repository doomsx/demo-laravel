<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full">
    <nav class="bg-slate-500 text-white px-3 py-4 flex gap-5 items-center">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </nav>

    <main class="p-4">
        {{ $slot }}
    </main>
</body>
</html>