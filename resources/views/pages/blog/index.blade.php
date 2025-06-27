@extends('layouts.app')

@section('title', 'Blog - Semua Artikel')

@section('content')
<div class="bg-neutral-950 text-white min-h-screen">
    <!-- Header -->
    <section class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Blog <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Artikel</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                Koleksi artikel tentang teknologi, programming, dan pengembangan web
            </p>

            <!-- Search and Filter -->
            <div class="mt-12 max-w-3xl mx-auto">
                <form method="GET" action="{{ route('blog.index') }}" class="flex flex-col md:flex-row gap-4">
                    <!-- Search Input -->
                    <div class="flex-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i class="fa-solid fa-search text-gray-400"></i>
                        </div>
                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Cari artikel berdasarkan judul atau konten..."
                               class="w-full pl-12 pr-4 py-4 bg-slate-800/60 backdrop-blur-sm border border-slate-600/50 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-purple-500/60 focus:ring-2 focus:ring-purple-500/20 transition-all">
                    </div>

                    <!-- Category Filter Dropdown -->
                    <div class="relative md:w-64">
                        <select name="category"
                                onchange="this.form.submit()"
                                class="w-full appearance-none bg-slate-800/60 backdrop-blur-sm border border-slate-600/50 rounded-xl text-white py-4 pl-4 pr-12 focus:outline-none focus:border-purple-500/60 focus:ring-2 focus:ring-purple-500/20 transition-all cursor-pointer">
                            <option value="">Semua Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                            <i class="fa-solid fa-chevron-down text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Search Button -->
                    <button type="submit"
                            class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-semibold px-8 py-4 rounded-xl transition-all transform hover:scale-105 hover:shadow-lg hover:shadow-purple-500/25">
                        <i class="fa-solid fa-search mr-2"></i>
                        Cari
                    </button>
                </form>

                <!-- Active Filters Display -->
                @if(request('search') || request('category'))
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <span class="text-sm text-gray-400">Filter aktif:</span>

                        @if(request('search'))
                            <div class="flex items-center gap-2 bg-purple-600/20 border border-purple-500/30 rounded-full px-4 py-2 text-sm">
                                <i class="fa-solid fa-search text-purple-400"></i>
                                <span class="text-purple-200">"{{ request('search') }}"</span>
                                <a href="{{ route('blog.index', array_merge(request()->except('search'), request()->only('category'))) }}"
                                   class="text-purple-300 hover:text-white ml-1">
                                    <i class="fa-solid fa-times"></i>
                                </a>
                            </div>
                        @endif

                        @if(request('category'))
                            <div class="flex items-center gap-2 bg-cyan-600/20 border border-cyan-500/30 rounded-full px-4 py-2 text-sm">
                                <i class="fa-solid fa-tag text-cyan-400"></i>
                                <span class="text-cyan-200">{{ request('category') }}</span>
                                <a href="{{ route('blog.index', array_merge(request()->except('category'), request()->only('search'))) }}"
                                   class="text-cyan-300 hover:text-white ml-1">
                                    <i class="fa-solid fa-times"></i>
                                </a>
                            </div>
                        @endif

                        <!-- Clear all filters -->
                        <a href="{{ route('blog.index') }}"
                           class="text-sm text-gray-400 hover:text-white underline ml-2">
                            Hapus semua filter
                        </a>
                    </div>
                @endif
            </div>

            <!-- Stats -->
            <div class="flex justify-center items-center gap-8 mt-8 text-sm text-gray-400">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-purple-500 rounded-full"></div>
                    <span>{{ $articles->total() }} Total Artikel</span>
                </div>
                @if(request('search') || request('category'))
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                        <span>{{ $articles->count() }} Hasil Ditemukan</span>
                    </div>
                @else
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                        <span>Update Mingguan</span>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Articles List -->
    <section class="px-6 pb-20">
        <div class="max-w-4xl mx-auto space-y-8">
            @forelse($articles as $index => $article)
                <article class="group relative">
                    <!-- Timeline connector (except for last item) -->
                    @if(!$loop->last)
                        <div class="absolute left-4 top-20 w-0.5 h-full bg-gradient-to-b from-purple-500/50 to-transparent hidden md:block"></div>
                    @endif

                    <!-- Timeline dot -->
                    <div class="absolute left-2.5 top-6 w-3 h-3 bg-purple-500 rounded-full border-2 border-neutral-950 hidden md:block group-hover:bg-cyan-400 transition-colors duration-300"></div>

                    <a href="{{ route('blog.show', $article->slug) }}"
                       class="block bg-slate-800/40 backdrop-blur-sm border border-slate-700/50 hover:border-purple-500/40 rounded-2xl shadow-lg hover:shadow-2xl hover:shadow-purple-500/10 overflow-hidden transition-all duration-500 transform hover:-translate-y-1 md:ml-12">

                        <div class="flex flex-col lg:flex-row">
                            <!-- Image Section -->
                            <div class="lg:w-80 lg:flex-shrink-0 relative overflow-hidden">
                                <img src="{{ $article->image ?: 'https://source.unsplash.com/400x250/?technology,programming' }}"
                                     alt="{{ $article->title }}"
                                     class="w-full h-48 lg:h-full object-cover group-hover:scale-110 transition-transform duration-700">

                                <!-- Overlay gradient -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-slate-800/90"></div>

                                <!-- Category badge -->
                                <span class="absolute top-4 left-4 bg-gradient-to-r from-purple-600 to-blue-600 text-xs font-semibold px-3 py-2 rounded-full text-white shadow-lg backdrop-blur-sm">
                                    <i class="fa-solid fa-tag mr-1"></i>
                                    {{ $article->category }}
                                </span>

                                <!-- Featured badge for first article -->
                                @if($index === 0)
                                    <span class="absolute top-4 right-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-xs font-bold px-3 py-2 rounded-full text-white shadow-lg animate-pulse">
                                        <i class="fa-solid fa-star mr-1"></i>
                                        FEATURED
                                    </span>
                                @endif
                            </div>

                            <!-- Content Section -->
                            <div class="flex-1 p-6 lg:p-8 flex flex-col justify-between">
                                <!-- Meta info -->
                                <div class="flex flex-wrap items-center gap-4 text-xs text-gray-400 mb-4">
                                    <div class="flex items-center gap-2 bg-slate-700/50 px-3 py-1 rounded-full">
                                        <i class="fa-regular fa-calendar text-purple-400"></i>
                                        <span>{{ $article->formatted_date }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 bg-slate-700/50 px-3 py-1 rounded-full">
                                        <i class="fa-regular fa-clock text-cyan-400"></i>
                                        <span>{{ $article->read_time }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 bg-slate-700/50 px-3 py-1 rounded-full">
                                        <i class="fa-regular fa-eye text-green-400"></i>
                                        <span>{{ rand(50, 500) }} views</span>
                                    </div>
                                </div>

                                <!-- Title -->
                                <h2 class="text-xl lg:text-2xl font-bold text-white mb-3 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-400 group-hover:to-cyan-400 group-hover:bg-clip-text transition-all duration-300 leading-tight">
                                    {{ $article->title }}
                                </h2>

                                <!-- Excerpt -->
                                <p class="text-gray-300 text-sm lg:text-base leading-relaxed mb-6 flex-1">
                                    {{ Str::limit($article->excerpt, 150) }}
                                </p>

                                <!-- Action row -->
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center text-purple-400 font-semibold text-sm group-hover:text-cyan-400 transition-colors">
                                        <span>Baca Selengkapnya</span>
                                        <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                                    </div>

                                    <!-- Social actions -->
                                    <div class="flex items-center gap-3 text-gray-500">
                                        <button class="hover:text-red-400 transition-colors transform hover:scale-110">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                        <button class="hover:text-green-400 transition-colors transform hover:scale-110">
                                            <i class="fa-solid fa-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Bottom accent line -->
                        <div class="h-1 bg-gradient-to-r from-purple-600 via-blue-500 to-cyan-400 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                    </a>
                </article>
            @empty
                <div class="text-center py-20">
                    <div class="w-24 h-24 mx-auto mb-6 bg-slate-800 rounded-full flex items-center justify-center">
                        <i class="fa-regular fa-file-lines text-3xl text-gray-500"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-2">Belum Ada Artikel</h3>
                    <p class="text-gray-500">Artikel baru akan segera hadir. Stay tuned!</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($articles->hasPages())
            <div class="max-w-4xl mx-auto mt-16">
                <div class="flex justify-center">
                    <div class="bg-slate-800/60 backdrop-blur-sm border border-slate-700/50 rounded-2xl p-4">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        @endif
    </section>
</div>

<style>
/* Custom pagination styling */
.pagination {
    @apply flex items-center gap-2;
}

.pagination a, .pagination span {
    @apply px-4 py-2 text-sm font-medium rounded-lg transition-all;
}

.pagination a {
    @apply text-gray-300 hover:text-white hover:bg-purple-600/20 border border-slate-600 hover:border-purple-500/40;
}

.pagination .active span {
    @apply bg-gradient-to-r from-purple-600 to-blue-600 text-white border-purple-500;
}

.pagination .disabled span {
    @apply text-gray-600 cursor-not-allowed;
}
</style>
@endsection
