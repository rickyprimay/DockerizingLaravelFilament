<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Article</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</head>

<body>
<div class="max-w-3xl mx-auto mt-8 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="p-6">
        <h1 class="text-3xl font-bold text-gray-800">{{ $article->title }}</h1>
        
        <div class="flex items-center justify-between mt-4 text-sm text-gray-500">
            <p class="font-semibold">{{ $article->name }}</p>
            <span>{{ $article->created_at->format('Y-m-d H:i:s') }}</span>
        </div>
    </div>

    <div class="px-6 py-4">
        <div class="text-gray-700 leading-relaxed">
            {!! $article->content !!}
        </div>
    </div>

    <div class="px-6 py-4">
        <a href="{{ route('index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Kembali ke Daftar Artikel
        </a>
    </div>
</div>
</body>

</html>
