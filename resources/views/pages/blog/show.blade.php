@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="bg-neutral-950 text-white min-h-screen">
    <article class="py-20 px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <header class="mb-8">
                <div class="flex items-center gap-4 mb-4">
                    <span class="bg-purple-500 text-xs font-medium px-3 py-1 rounded-full text-white">
                        {{ $article->category }}
                    </span>
                    <div class="flex text-sm text-gray-400 gap-4">
                        <div class="flex items-center gap-1">
                            <i class="fa-regular fa-calendar"></i>
                            {{ $article->formatted_date }}
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="fa-regular fa-clock"></i>
                            {{ $article->read_time }}
                        </div>
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    {{ $article->title }}
                </h1>
                <p class="text-gray-300 text-lg">{{ $article->excerpt }}</p>
            </header>

            <!-- Featured Image -->
            @if($article->image)
            <div class="mb-8">
                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full h-64 md:h-96 object-cover rounded-xl">
            </div>
            @endif

            <!-- Content -->
            <div class="prose prose-invert prose-lg max-w-none">
                {!! $article->content !!}
            </div>
        </div>
    </article>

    <!-- Related Articles -->
    @if($relatedArticles->count() > 0)
    <section class="px-6 pb-20">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl font-bold text-white mb-8">Artikel Terkait</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedArticles as $related)
                    <a href="{{ route('blog.show', $related->slug) }}" class="group bg-slate-800/40 border border-slate-700/50 hover:border-purple-500/40 rounded-xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-300">
                        <div class="relative">
                            <img src="{{ $related->image ?: 'https://source.unsplash.com/400x250/?technology,programming' }}"
                                 alt="{{ $related->title }}"
                                 class="w-full h-32 object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-white font-semibold mb-2 group-hover:text-purple-300 transition-colors">
                                {{ $related->title }}
                            </h3>
                            <p class="text-gray-400 text-sm">{{ Str::limit($related->excerpt, 80) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
@endsection
