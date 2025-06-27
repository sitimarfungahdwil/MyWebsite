@extends('layouts.app')

@section('title', 'Available for Freelance - Siti Marfungah')

@section('content')
<div class="min-h-screen bg-black text-white">
    <!-- Hero Section -->
    <div class="relative overflow-hidden pt-32 pb-16">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-purple-500/20 rounded-full blur-xl"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-pink-500/20 rounded-full blur-lg"></div>
            <div class="absolute bottom-20 left-1/3 w-16 h-16 bg-blue-500/20 rounded-full blur-lg"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-900/50 to-pink-900/50 backdrop-blur-sm rounded-full px-4 py-2 mb-6 border border-purple-500/30">
                    <span class="text-yellow-400 mr-2">💼</span>
                    <span class="text-sm font-medium">Available for Freelance</span>
                </div>

                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-purple-600 bg-clip-text text-transparent">
                        Hire Me
                    </span>
                </h1>

                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    Berikut adalah layanan freelance yang saya tawarkan. Semua proyek bisa disesuaikan dengan kebutuhanmu.
                    Jika ada yang belum tercantum, silakan hubungi saya untuk diskusi lebih lanjut!
                </p>

                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button class="filter-btn active bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 px-6 py-3 rounded-full font-medium transition-all duration-300 transform hover:scale-105" data-filter="all">
                        🎯 Semua Layanan
                    </button>
                    <button class="filter-btn bg-gray-800/50 hover:bg-gray-700/50 border border-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 transform hover:scale-105" data-filter="web">
                        🌐 Web Development
                    </button>
                    <button class="filter-btn bg-gray-800/50 hover:bg-gray-700/50 border border-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 transform hover:scale-105" data-filter="design">
                        🎨 Design & Media
                    </button>
                    <button class="filter-btn bg-gray-800/50 hover:bg-gray-700/50 border border-gray-700 px-6 py-3 rounded-full font-medium transition-all duration-300 transform hover:scale-105" data-filter="iot">
                        🤖 IoT & Tech
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="container mx-auto px-6 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="services-grid">

            <!-- Undangan Digital -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-purple-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20" data-category="design">
                <div class="absolute -top-3 -right-3">
                    <span class="bg-gradient-to-r from-pink-500 to-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full">🔥 Favorit</span>
                </div>

                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🎉</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-pink-400 to-purple-400 bg-clip-text text-transparent">
                    Undangan Digital Interactive
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Desain undangan modern dengan fitur RSVP, countdown timer, dan galeri foto. Bisa diakses via mobile & mudah dibagikan.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 200.000</span>
                    <button class="bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Website Personal/Portfolio -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-blue-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20" data-category="web">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🌐</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                    Website Personal & Portfolio
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Website modern, SEO-ready, dan mobile responsive. Cocok untuk portfolio, CV online, atau personal branding.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 500.000</span>
                    <button class="bg-gradient-to-r from-blue-600 to-cyan-600 hover:from-blue-700 hover:to-cyan-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Mobile App -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-green-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-green-500/20" data-category="web">
                <div class="absolute -top-3 -right-3">
                    <span class="bg-gradient-to-r from-green-500 to-teal-600 text-white text-xs font-bold px-3 py-1 rounded-full">💡 Premium</span>
                </div>

                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">📱</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-green-400 to-teal-400 bg-clip-text text-transparent">
                    Mobile App Development
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Aplikasi hybrid Android/iOS dengan React Native atau Flutter. Dari prototype hingga deployment ke store.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 1.500.000</span>
                    <button class="bg-gradient-to-r from-green-600 to-teal-600 hover:from-green-700 hover:to-teal-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- IoT Project -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-orange-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20" data-category="iot">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🤖</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent">
                    IoT & Automation Project
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Proyek Arduino, ESP32, sensor monitoring, home automation. Cocok untuk tugas akhir mahasiswa atau kebutuhan industri.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 750.000</span>
                    <button class="bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Video Ucapan -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-pink-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-pink-500/20" data-category="design">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🎂</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-pink-400 to-rose-400 bg-clip-text text-transparent">
                    Video Ucapan Kustom
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Video animasi personal dengan musik dan efek kustom. Perfect untuk kejutan ulang tahun atau anniversary.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 100.000</span>
                    <button class="bg-gradient-to-r from-pink-600 to-rose-600 hover:from-pink-700 hover:to-rose-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Website Pemerintahan -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-indigo-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/20" data-category="web">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🏛️</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
                    Website Pemerintahan
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Website resmi dengan standar pemerintahan, sistem berita, galeri, dan dashboard admin yang user-friendly.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 1.000.000</span>
                    <button class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Toko Online -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-yellow-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-yellow-500/20" data-category="web">
                <div class="absolute -top-3 -right-3">
                    <span class="bg-gradient-to-r from-yellow-500 to-orange-600 text-white text-xs font-bold px-3 py-1 rounded-full">🚀 Trending</span>
                </div>

                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🛒</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">
                    E-Commerce & Toko Online
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Toko online lengkap dengan payment gateway, inventory management, dan dashboard penjualan yang powerful.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 800.000</span>
                    <button class="bg-gradient-to-r from-yellow-600 to-orange-600 hover:from-yellow-700 hover:to-orange-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Website UMKM -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-emerald-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-emerald-500/20" data-category="web">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">🏪</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-emerald-400 to-green-400 bg-clip-text text-transparent">
                    Website UMKM & Bisnis
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Website profesional untuk UMKM dengan katalog produk, kontak WhatsApp, dan optimasi SEO lokal.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 400.000</span>
                    <button class="bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-700 hover:to-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

            <!-- Sistem Informasi -->
            <div class="service-card group relative bg-gradient-to-br from-gray-900/80 to-gray-800/50 backdrop-blur-sm rounded-2xl p-8 border border-gray-700/50 hover:border-violet-500/50 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-violet-500/20" data-category="web">
                <div class="text-4xl mb-4 group-hover:scale-110 transition-transform duration-300">💼</div>
                <h3 class="text-xl font-bold mb-3 bg-gradient-to-r from-violet-400 to-purple-400 bg-clip-text text-transparent">
                    Sistem Informasi Custom
                </h3>
                <p class="text-gray-300 mb-4 text-sm leading-relaxed">
                    Aplikasi web custom untuk manajemen data, inventory, keuangan, atau kebutuhan spesifik organisasi Anda.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-green-400 font-semibold">Mulai dari Rp 1.200.000</span>
                    <button class="bg-gradient-to-r from-violet-600 to-purple-600 hover:from-violet-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 transform hover:scale-105">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- CTA Section -->
    <div class="relative overflow-hidden py-20">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-20 w-40 h-40 bg-purple-500/10 rounded-full blur-2xl"></div>
            <div class="absolute bottom-10 right-20 w-32 h-32 bg-pink-500/10 rounded-full blur-xl"></div>
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-purple-600 bg-clip-text text-transparent">
                        Siap Mulai Proyek?
                    </span>
                </h2>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    Tertarik dengan salah satu layanan di atas? Mari diskusi kebutuhan proyekmu dan dapatkan konsultasi GRATIS!
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#" class="group bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 hover:shadow-lg hover:shadow-purple-500/25 flex items-center">
                        <span class="mr-2">💬</span>
                        Konsultasi via WhatsApp
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>

                    <a href="#" class="group bg-gray-800/50 hover:bg-gray-700/50 border border-gray-600 hover:border-purple-500 text-white font-bold py-4 px-8 rounded-full transition-all duration-300 transform hover:scale-105 flex items-center">
                        <span class="mr-2">📧</span>
                        Kirim Email
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>

                <div class="mt-8 flex justify-center items-center space-x-6 text-sm text-gray-400">
                    <div class="flex items-center">
                        <span class="text-green-400 mr-2">✓</span>
                        Konsultasi Gratis
                    </div>
                    <div class="flex items-center">
                        <span class="text-green-400 mr-2">✓</span>
                        Revisi Unlimited
                    </div>
                    <div class="flex items-center">
                        <span class="text-green-400 mr-2">✓</span>
                        Support 24/7
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Filter -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const serviceCards = document.querySelectorAll('.service-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;

            // Update active button
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-gradient-to-r', 'from-purple-600', 'to-pink-600');
                b.classList.add('bg-gray-800/50', 'hover:bg-gray-700/50', 'border', 'border-gray-700');
            });

            this.classList.add('active', 'bg-gradient-to-r', 'from-purple-600', 'to-pink-600');
            this.classList.remove('bg-gray-800/50', 'hover:bg-gray-700/50', 'border', 'border-gray-700');

            // Filter cards
            serviceCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeInUp 0.5s ease-out';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

// Add CSS animation
const style = document.createElement('style');
style.textContent = `
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(style);
</script>

@endsection
