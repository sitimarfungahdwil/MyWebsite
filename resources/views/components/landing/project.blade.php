<div class="border-b border-grey pb-24 pt-20 relative overflow-hidden">
  <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
        Latest <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 bg-clip-text text-transparent">Project</span>
      </h2>
      <div class="h-1 w-20 bg-gradient-to-r from-cyan-400 to-purple-600 mx-auto rounded-full"></div>
    </div>

  <div class="flex flex-col lg:flex-row items-center justify-between max-w-7xl mx-auto gap-12">
    <!-- LEFT: Image Carousel -->
    <div class="relative w-full lg:w-1/2 h-96 flex items-center justify-center">
      <div class="relative w-full h-full max-w-md">
        <img
          src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop"
          alt="Project 1"
          class="w-full h-full object-cover rounded-2xl shadow-2xl border border-gray-700"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-2xl"></div>
      </div>

      <!-- Arrows -->
      <button
        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white p-3 rounded-full transition-all duration-300 z-10 border border-white/20"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <button
        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg transition-all duration-300 z-10 font-medium shadow-lg"
      >
        Next
      </button>

      <!-- Dots -->
      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
        <div class="w-8 h-3 bg-indigo-500 rounded-full"></div>
        <div class="w-3 h-3 bg-white/40 rounded-full"></div>
        <div class="w-3 h-3 bg-white/40 rounded-full"></div>
      </div>
    </div>

    <!-- RIGHT: Project Info -->
    <div class="w-full lg:w-1/2 text-white space-y-6">
      <div class="space-y-4">
        <div class="space-y-2">
          <span class="inline-block px-3 py-1 bg-indigo-600/20 text-indigo-400 rounded-full text-sm font-medium border border-indigo-500/30">
            Featured Project
          </span>
          <h2 class="text-4xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
            Project 1
          </h2>
        </div>

        <p class="text-gray-300 text-lg leading-relaxed">
          Deskripsi untuk Project 1.
        </p>

        <div class="flex items-center space-x-4 pt-4">
          <a href="#" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 shadow-lg">
            View Project
          </a>
          <a href="#" class="border border-gray-600 hover:border-gray-400 text-gray-300 hover:text-white px-6 py-3 rounded-lg font-medium transition-all duration-300">
            Learn More
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="flex flex-col items-center justify-center mt-16 space-y-4">
    <div class="flex items-center justify-center space-x-6">
      <div class="inline-flex items-center space-x-2 bg-gray-800/50 backdrop-blur-sm px-6 py-3 rounded-full border border-gray-700">
        <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
        <span class="text-gray-300 text-sm">Showing latest 5 projects</span>
      </div>

      <a
        href="#"
        class="group flex items-center space-x-3 text-indigo-400 hover:text-indigo-300 transition-all duration-300"
      >
        <span class="text-lg font-medium">View All Projects</span>
        <div class="flex items-center space-x-1">
          <span class="text-sm opacity-70">(5)</span>
          <svg
            class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </div>
      </a>
    </div>
    <p class="text-gray-500 text-sm text-center">
      Explore my complete portfolio and discover more amazing projects
    </p>
  </div>
</div>
