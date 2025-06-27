@extends('layouts.app')

@section('title', 'Blog - Semua Artikel')

@section('content')
<div class="bg-neutral-950 text-white min-h-screen">
    <!-- Header -->
    <section class="py-20 px-6">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Blog <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Artikel</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Koleksi artikel tentang teknologi, programming, dan pengembangan web
            </p>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="px-6 pb-20">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($articles as $article)
                    <a href="{{ route('blog.show', $article->slug) }}" class="group bg-slate-800/40 border border-slate-700/50 hover:border-purple-500/40 rounded-xl shadow-lg hover:shadow-xl overflow-hidden transition-all duration-300 flex flex-col">
                        <div class="relative">
                            <img src="{{ $article->image ?: 'https://source.unsplash.com/400x250/?technology,programming' }}"
                                 alt="{{ $article->title }}"
                                 class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300">
                            <span class="absolute top-2 left-2 bg-purple-500/80 text-xs font-medium px-3 py-1 rounded-full text-white">
                                {{ $article->category }}
                            </span>
                        </div>
                        <div class="p-5 flex flex-col flex-1">
                            <div class="flex text-xs text-gray-400 mb-3 gap-3">
                                <div class="flex items-center gap-1">
                                    <i class="fa-regular fa-calendar"></i>
                                    {{ $article->formatted_date }}
                                </div>
                                <div class="flex items-center gap-1">
                                    <i class="fa-regular fa-clock"></i>
                                    {{ $article->read_time }}
                                </div>
                            </div>
                            <h3 class="text-lg font-semibold text-white mb-2 group-hover:text-purple-300 transition-colors">
                                {{ $article->title }}
                            </h3>
                            <p class="text-gray-300 text-sm flex-1">{{ Str::limit($article->excerpt, 100) }}</p>
                            <div class="mt-4 text-purple-400 font-semibold text-sm flex items-center group-hover:text-purple-300">
                                <span>Baca Selengkapnya</span>
                                <i class="fa-solid fa-arrow-right ml-2"></i>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-400 text-lg">Belum ada artikel yang tersedia.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        </div>
    </section>
</div>
@endsection
