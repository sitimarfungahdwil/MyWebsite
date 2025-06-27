<!-- resources/views/components/about.blade.php -->
<div x-data="{ isHovered: false }" x-init="$nextTick(() => {
    const observer = new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting) $el.classList.add('in-view');
    }, { threshold: 0.3 });
    observer.observe($el);
})" class="relative overflow-hidden border-b border-neutral-900 py-10 px-4 max-w-6xl mx-auto">

  <!-- Background Blurs -->
  <div class="absolute inset-0 -z-10">
    <div class="absolute top-14 left-8 w-24 h-24 bg-blue-500 rounded-full blur-3xl opacity-10"></div>
    <div class="absolute bottom-14 right-8 w-28 h-28 bg-purple-500 rounded-full blur-3xl opacity-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-44 h-44 bg-indigo-500 rounded-full blur-3xl opacity-10"></div>
  </div>

  <!-- Floating Dots -->
  <template x-for="i in 4" :key="i">
    <div class="absolute w-1.5 h-1.5 bg-blue-400 rounded-full opacity-20 animate-ping"
         :style="`top: ${25 + (i % 2) * 25}%; left: ${15 + i * 20}%`">
    </div>
  </template>

  <!-- Heading -->
  <div class="text-center mb-10">
    <h1 class="text-4xl font-bold text-white">About <span class="bg-gradient-to-r from-blue-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent">Me</span></h1>
    <div class="w-14 h-0.5 bg-gradient-to-r from-blue-400 to-purple-600 mx-auto mt-3 rounded-full"></div>
  </div>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

    <!-- Image -->
    <div class="relative group w-fit mx-auto" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
      <div class="absolute -inset-3 rounded-xl bg-gradient-to-r from-blue-500 via-purple-500 to-indigo-500 blur opacity-25"></div>
      <div class="relative w-72 h-96 bg-neutral-800 border border-neutral-700 rounded-2xl flex items-center justify-center overflow-hidden">
        <img src="{{ asset('images/profilePicture.png') }}" alt="Profile Photo" class="w-4/5 h-4/5 object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-blue-600/20 to-transparent transition-opacity duration-300" :class="isHovered ? 'opacity-100' : 'opacity-0'"></div>
        <div class="absolute top-4 right-4 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold transform transition-transform duration-300" :class="isHovered ? 'scale-110 rotate-360' : 'scale-100'">💻</div>
        <div class="absolute bottom-4 left-4 w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white text-sm font-bold transform transition-transform duration-300" :class="isHovered ? 'scale-110 -rotate-360' : 'scale-100'">🎨</div>
      </div>
      <div class="absolute -bottom-4 -right-4 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg p-3 text-white text-center">
        <div class="text-xl font-bold text-blue-400">3+</div>
        <div class="text-xs text-gray-300">Years</div>
      </div>
      <div class="absolute -top-4 -left-4 bg-white/10 backdrop-blur-sm border border-white/20 rounded-lg p-3 text-white text-center">
        <div class="text-xl font-bold text-purple-400">50+</div>
        <div class="text-xs text-gray-300">Projects</div>
      </div>
    </div>

    <!-- Text Section -->
    <div class="space-y-6 w-full">
      <div class="bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all">
        <p class="text-gray-300 leading-relaxed">
          Saya adalah seorang developer yang passionate dalam menciptakan solusi digital yang inovatif dan user-friendly. Dengan pengalaman lebih dari 3 tahun di bidang web development, saya telah mengerjakan berbagai proyek mulai dari aplikasi web sederhana hingga sistem enterprise yang kompleks.
        </p>
      </div>

      <!-- Tags -->
      <div class="flex flex-wrap gap-2">
        @foreach (["FrontEnd", "BackEnd", "Database", "UI/UX", "IoT"] as $tag)
          <span class="bg-gradient-to-r from-blue-500/20 to-purple-500/20 border border-blue-500/30 text-blue-300 px-3 py-1.5 rounded-full text-sm font-medium backdrop-blur-sm hover:bg-blue-500/30 transition-transform duration-200">
            {{ $tag }}
          </span>
        @endforeach
      </div>

      <!-- CTA Button -->
      <div>
        <button onclick="openAboutPopup('fadeInUp')" @mouseenter="isHovered = true" @mouseleave="isHovered = false"
        class="relative bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium py-3 px-6 rounded-lg overflow-hidden group hover:from-blue-600 hover:to-purple-700">
          <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 transition-transform duration-300 -translate-x-full group-hover:translate-x-0"></div>
          <span class="relative z-10 flex items-center gap-2 text-sm">
            Lebih Jauh Tentang Saya
            <span class="transform transition-transform duration-300" :class="isHovered ? 'translate-x-1' : 'translate-x-0'">→</span>
          </span>
        </button>
      </div>
    </div>

  </div>
</div>




<!-- Tambahkan ini di akhir file resources/views/components/about.blade.php -->
<!-- SETELAH </div> penutup terakhir -->

<!-- Popup Modal -->
<div id="aboutModal" class="fixed inset-0 z-50 hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" onclick="closeAboutPopup()"></div>

    <!-- Modal Content -->
    <div id="aboutModalContent" class="absolute top-1/2 left-1/2 w-11/12 max-w-2xl max-h-[85vh] bg-gray-900/95 backdrop-blur-sm border border-gray-700/50 rounded-2xl shadow-2xl">
        <!-- Header -->
        <div class="flex items-center justify-between p-6 border-b border-gray-700/50">
            <h2 class="text-2xl font-bold text-white flex items-center gap-3">
                <span class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></span>
                Tentang Saya
            </h2>
            <button onclick="closeAboutPopup()" class="text-gray-400 hover:text-white transition-colors p-2 hover:bg-gray-800 rounded-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Content -->
        <div class="p-6 overflow-y-auto custom-scrollbar max-h-[60vh]">
            <div class="space-y-6 text-gray-300 leading-relaxed">
                <!-- Opening -->
                <div class="bg-gradient-to-r from-blue-500/10 to-purple-500/10 p-4 rounded-lg border border-blue-500/20">
                    <p class="text-lg">
                        Halo! Saya seorang <span class="text-blue-400 font-semibold">Full-Stack Developer</span> yang passionate dalam menciptakan pengalaman digital yang luar biasa. Dengan lebih dari 3 tahun pengalaman di industri teknologi, saya telah berkembang menjadi seorang profesional yang tidak hanya fokus pada kode, tetapi juga pada dampak yang dapat diberikan teknologi kepada kehidupan manusia.
                    </p>
                </div>

                <!-- Journey -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
                        Perjalanan Karir
                    </h3>
                    <p class="mb-4">
                        Perjalanan saya dimulai dari rasa penasaran sederhana tentang bagaimana website bekerja. Dari HTML dan CSS pertama yang saya tulis, saya langsung jatuh cinta dengan dunia pemrograman. Seiring waktu, saya mengembangkan keahlian dalam berbagai teknologi, mulai dari frontend hingga backend, database management, hingga implementasi IoT yang inovatif.
                    </p>
                    <p>
                        Selama 3+ tahun berkarir, saya telah menyelesaikan lebih dari <span class="text-blue-400 font-semibold">50+ proyek</span> yang beragam - mulai dari aplikasi web sederhana untuk UMKM lokal hingga sistem enterprise yang kompleks untuk perusahaan multinasional. Setiap proyek memberikan pembelajaran berharga dan memperkuat komitmen saya untuk terus berinovasi.
                    </p>
                </div>

                <!-- Philosophy -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 bg-green-500 rounded-full"></span>
                        Filosofi Kerja
                    </h3>
                    <p class="mb-4">
                        Bagi saya, programming bukan hanya tentang menulis kode yang berfungsi, tetapi tentang <span class="text-blue-400 font-semibold">crafting solutions</span> yang elegant, scalable, dan user-friendly. Saya percaya bahwa teknologi terbaik adalah yang tidak terlihat oleh pengguna - yang bekerja dengan mulus dan intuitif hingga mereka lupa bahwa mereka sedang berinteraksi dengan sebuah sistem yang kompleks.
                    </p>
                    <p>
                        Dalam setiap proyek, saya selalu menerapkan prinsip <span class="text-green-400 font-semibold">clean code</span>, <span class="text-green-400 font-semibold">responsive design</span>, dan <span class="text-green-400 font-semibold">optimal performance</span>. Saya juga sangat peduli dengan security dan accessibility, memastikan bahwa setiap aplikasi yang saya buat dapat diakses oleh semua orang dan aman dari berbagai ancaman cyber.
                    </p>
                </div>

                <!-- Innovation -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 bg-pink-500 rounded-full"></span>
                        Inovasi & Eksplorasi
                    </h3>
                    <p class="mb-4">
                        Dunia teknologi yang terus berkembang membuat saya selalu excited untuk mempelajari hal-hal baru. Saat ini, saya sedang mendalami bidang <span class="text-pink-400 font-semibold">Artificial Intelligence</span> dan <span class="text-pink-400 font-semibold">Machine Learning</span>, serta mengeksplorasi potensi integrasi IoT dalam kehidupan sehari-hari.
                    </p>
                    <p>
                        Saya juga aktif berkontribusi dalam komunitas developer lokal, sering berbagi knowledge melalui workshop dan mentoring junior developers. Bagi saya, ilmu yang tidak dibagikan adalah ilmu yang tidak berkembang.
                    </p>
                </div>

                <!-- Personal -->
                <div class="bg-gradient-to-r from-pink-500/10 to-purple-500/10 p-4 rounded-lg border border-pink-500/20">
                    <h3 class="text-xl font-semibold text-white mb-3 flex items-center gap-2">
                        <span class="w-2 h-2 bg-yellow-500 rounded-full"></span>
                        Di Luar Coding
                    </h3>
                    <p>
                        Ketika tidak sedang berkutat dengan kode, saya menikmati fotografi dan traveling untuk mencari inspirasi. Saya percaya bahwa kreativitas tidak hanya datang dari layar komputer, tetapi juga dari pengalaman hidup yang beragam. Hobi lain saya adalah membaca buku tentang teknologi dan psychology, yang membantu saya memahami tidak hanya aspek teknis, tetapi juga aspek human-centered dalam setiap solusi yang saya kembangkan.
                    </p>
                </div>

                <!-- Closing -->
                <div class="text-center pt-4">
                    <p class="text-lg text-blue-400">
                        <em>"Code is poetry written in logic, and every problem is an opportunity to create something beautiful."</em>
                    </p>
                    <p class="text-sm text-gray-500 mt-2">- Personal Motto</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="p-6 border-t border-gray-700/50 text-center">
            <button onclick="closeAboutPopup()" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                Tutup
            </button>
        </div>
    </div>
</div>

<!-- CSS Animations -->
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate(-50%, -40%) scale(0.95);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

    @keyframes slideInFromBottom {
        from {
            opacity: 0;
            transform: translate(-50%, 100%);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%);
        }
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.3);
        }
        to {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.4s ease-out forwards;
    }

    .animate-slideInFromBottom {
        animation: slideInFromBottom 0.5s ease-out forwards;
    }

    .animate-scaleIn {
        animation: scaleIn 0.3s ease-out forwards;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: rgba(59, 130, 246, 0.6);
        border-radius: 3px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: rgba(59, 130, 246, 0.8);
    }
</style>

<!-- JavaScript -->
<script>
    let currentAboutAnimation = 'fadeInUp';

    function openAboutPopup(animationType = 'fadeInUp') {
        currentAboutAnimation = animationType;
        const modal = document.getElementById('aboutModal');
        const content = document.getElementById('aboutModalContent');

        // Show modal
        modal.classList.remove('hidden');

        // Remove any existing animation classes
        content.classList.remove('animate-fadeInUp', 'animate-slideInFromBottom', 'animate-scaleIn');

        // Add the selected animation
        setTimeout(() => {
            content.classList.add(`animate-${animationType}`);
        }, 10);

        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }

    function closeAboutPopup() {
        const modal = document.getElementById('aboutModal');
        const content = document.getElementById('aboutModalContent');

        // Add exit animation
        content.style.animation = getAboutExitAnimation(currentAboutAnimation);

        setTimeout(() => {
            modal.classList.add('hidden');
            content.style.animation = '';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    function getAboutExitAnimation(type) {
        switch(type) {
            case 'fadeInUp':
                return 'fadeInUp 0.3s ease-in reverse';
            case 'slideInFromBottom':
                return 'slideInFromBottom 0.4s ease-in reverse';
            case 'scaleIn':
                return 'scaleIn 0.2s ease-in reverse';
            default:
                return 'fadeInUp 0.3s ease-in reverse';
        }
    }

    // Close modal when pressing Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('aboutModal').classList.contains('hidden')) {
            closeAboutPopup();
        }
    });
</script>
