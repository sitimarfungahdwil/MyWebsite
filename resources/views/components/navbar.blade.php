{{-- resources/views/components/navbar.blade.php --}}
@php
    $menuItems = [
        ['name' => 'HOME', 'href' => '#home'],
        ['name' => 'SKILLS', 'href' => '#skills'],
        ['name' => 'ABOUT ME', 'href' => '#aboutme'],
        ['name' => 'BLOG', 'href' => '#blog'],
        ['name' => 'LATEST PROJECT', 'href' => '#project'],
    ];
@endphp

<div class="h-24"></div>
<nav x-data="{
        isOpen: false,
        scrolled: false,
    }"
    x-init="() => {
        window.addEventListener('scroll', () => {
            scrolled = window.scrollY > 50;
        });
    }"
    :class="scrolled ? 'bg-black/80 backdrop-blur-md border-b border-white/10' : 'bg-transparent'"
    class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex border border-white/30 rounded-full px-8 xl:px-16 py-3 backdrop-blur-sm bg-white/5">
                <div class="flex gap-6 xl:gap-8 text-white">
                    @foreach ($menuItems as $item)
                        <a href="{{ $item['href'] }}" class="relative text-sm xl:text-base font-medium tracking-wide hover:text-gray-300 transition-colors duration-200">
                            {{ $item['name'] }}
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-white group-hover:w-full transition-all duration-300"></span>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Desktop Contact Button --}}
            <a href="#contact" class="hidden lg:flex border border-white/50 px-6 py-3 rounded-full text-white font-medium tracking-wide hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm bg-white/5">
                CONTACT
            </a>

            {{-- Mobile Menu Toggle --}}
            <button @click="isOpen = !isOpen" class="lg:hidden text-white p-2 rounded-full border border-white/30 backdrop-blur-sm bg-white/5">
                <i :data-lucide="isOpen ? 'x' : 'menu'" class="w-6 h-6"></i>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="isOpen" x-transition class="lg:hidden overflow-hidden">
            <div class="px-4 py-6 bg-black/90 backdrop-blur-md rounded-2xl mx-4 mb-4 border border-white/10">
                <div class="flex flex-col space-y-4">
                    @foreach ($menuItems as $item)
                        <a href="{{ $item['href'] }}" @click="isOpen = false" class="text-white font-medium py-2 tracking-wide transition-colors duration-200 hover:text-slate-300">
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                    <a href="#contact" @click="isOpen = false" class="border border-white/50 px-6 py-3 rounded-full text-white font-medium text-center hover:bg-white hover:text-black transition-all duration-300 mt-4">
                        CONTACT
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- Tambahkan ini di layouts/app.blade.php sebelum </body> --}}
<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>

{{-- Tambahkan AlpineJS jika belum --}}
<script src="https://unpkg.com/alpinejs" defer></script>
