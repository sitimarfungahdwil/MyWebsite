<div class="border-b border-gray-800 pb-24 pt-20 relative overflow-hidden">

  <!-- Background Elements -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-10 left-10 w-32 h-32 bg-cyan-500 rounded-full blur-3xl"></div>
    <div class="absolute bottom-10 right-10 w-40 h-40 bg-purple-500 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-blue-500 rounded-full blur-3xl"></div>
  </div>

  <div class="max-w-7xl mx-auto px-6">
    <!-- Title -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
        Tech <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Stack</span>
      </h2>
      <div class="h-1 w-20 bg-gradient-to-r from-cyan-400 to-purple-600 mx-auto rounded-full"></div>
      <p class="text-gray-400 mt-4 text-lg max-w-2xl mx-auto">
        Technologies and tools I use to bring ideas to life
      </p>
    </div>

    <!-- Technologies Grid -->
    <div class="flex flex-wrap items-center justify-center gap-6">
      @php
        $technologies = [
          ['icon' => 'fa-brands fa-react', 'color' => 'text-cyan-400', 'name' => 'React'],
          ['icon' => 'fa-solid fa-database', 'color' => 'text-blue-600', 'name' => 'MySQL'],
          ['icon' => 'fa-solid fa-mobile-screen', 'color' => 'text-sky-500', 'name' => 'Flutter'],
          ['icon' => 'fa-brands fa-github', 'color' => 'text-white', 'name' => 'GitHub'],
          ['icon' => 'fa-brands fa-laravel', 'color' => 'text-red-500', 'name' => 'Laravel'],
          ['icon' => 'fa-brands fa-wordpress', 'color' => 'text-cyan-800', 'name' => 'Wordpress'],

        ];
      @endphp

      @foreach ($technologies as $tech)
        <div class="group relative">
          <div class="relative rounded-2xl border-4 border-neutral-800 p-6 bg-neutral-900/50 backdrop-blur-sm hover:border-neutral-700 transition-all duration-300 cursor-pointer overflow-hidden">
            <!-- Animated Background -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition duration-300"></div>

            <!-- Icon -->
            <div class="relative z-10 flex items-center justify-center transition duration-300 group-hover:blur-sm">
              <i class="{{ $tech['icon'] }} text-7xl {{ $tech['color'] }} drop-shadow-lg"></i>
            </div>

            <!-- Hover Label -->
            <div class="absolute inset-0 flex items-center justify-center bg-black/70 opacity-0 group-hover:opacity-100 transition duration-300">
              <span class="text-white font-semibold text-xl">{{ $tech['name'] }}</span>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Show More Button Placeholder -->
    <div class="flex justify-center mt-12">
      <button class="group relative bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-300 overflow-hidden">
        <span class="relative z-10 flex items-center gap-2">
          Show More
          <span class="transition-transform group-hover:rotate-360 duration-300">↓</span>
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 opacity-0 group-hover:opacity-30 transition duration-300"></div>
      </button>
    </div>
  </div>
</div>
