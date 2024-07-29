<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-slate-600 text-white px-3 py-4 flex gap-5">
        <a href="/" class="px-3 py-2 bg-slate-700 rounded-md">Home</a>
        <a href="/about" class="px-3 py-2 bg-slate-700 rounded-md">About</a>  
        <a href="/contact" class="px-3 py-2 bg-slate-700 rounded-md">Contact</a>
    </nav>

    <main class="p-4">
        {{ $slot }}
    </main>
</body>
</html>