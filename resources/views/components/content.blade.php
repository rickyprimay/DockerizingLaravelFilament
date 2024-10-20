@foreach ($articles as $article)
    <div data-aos="{{ $loop->index % 2 == 0 ? 'fade-right' : 'fade-left' }}" 
         class="max-w-2xl mt-4 mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        
        <div class="p-4">
            <h2 class="text-xl font-bold text-gray-800">{{ $article->title }}</h2>

            <div class="mt-2 text-gray-600">
                {!! Str::limit(strip_tags($article->content), 200) !!}
            </div>

            <div class="flex items-center justify-between mt-4 text-sm text-gray-500">
                <p class="font-semibold">{{ $article->name }}</p>
                <span>{{ $article->created_at->format('Y-m-d H:i:s') }}</span>
            </div>

            <div class="mt-4">
                <a href="{{ route('articles.show', $article->id) }}" 
                    class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    Baca Detail
                </a>
            </div>
        </div>
    </div>
@endforeach
