<footer class="bg-gradient-to-br from-gray-900 via-black to-gray-900 border-t border-gray-800">
  <div class="max-w-7xl mx-auto px-8 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Brand Section -->
      <div class="lg:col-span-2 space-y-6">
        <h3 class="text-3xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">
          sitimarfungahdl.com
        </h3>
        <p class="text-gray-300 text-lg leading-relaxed mt-4">
          Passionate full-stack developer creating innovative digital solutions.
          Specialized in modern web technologies and user-centered design.
        </p>

        <!-- Social Links -->
        <div class="space-y-4">
          <h4 class="text-white font-semibold text-lg">Let's Connect</h4>
          <div class="flex space-x-4">
            @php
              $socialLinks = [
                ['name' => 'GitHub', 'url' => 'https://github.com', 'icon' => 'fa-brands fa-github'],
                ['name' => 'LinkedIn', 'url' => 'https://linkedin.com', 'icon' => 'fa-brands fa-linkedin'],
                ['name' => 'Twitter', 'url' => 'https://twitter.com', 'icon' => 'fa-brands fa-twitter'],
                ['name' => 'Instagram', 'url' => 'https://instagram.com', 'icon' => 'fa-brands fa-instagram'],
                ['name' => 'Email', 'url' => 'mailto:your@email.com', 'icon' => 'fa-solid fa-envelope'],
              ];
            @endphp
            @foreach ($socialLinks as $social)
              <a href="{{ $social['url'] }}" target="_blank" rel="noopener noreferrer"
                 class="group relative p-3 bg-gray-800/50 hover:bg-indigo-600/20 rounded-xl border border-gray-700 hover:border-indigo-500/50 transition-all duration-300 text-gray-400 hover:text-indigo-400">
                <i class="{{ $social['icon'] }} text-xl"></i>
                <span class="absolute -top-12 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white text-sm px-3 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                  {{ $social['name'] }}
                  <span class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></span>
                </span>
              </a>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="space-y-6">
        <h4 class="text-white font-semibold text-lg">Quick Links</h4>
        <ul class="space-y-3">
          @php
            $quickLinks = [
              ['name' => 'Home', 'url' => '#'],
              ['name' => 'About', 'url' => '#about'],
              ['name' => 'Projects', 'url' => '#projects'],
              ['name' => 'Skills', 'url' => '#skills'],
              ['name' => 'Contact', 'url' => '#contact'],
            ];
          @endphp
          @foreach ($quickLinks as $link)
            <li>
              <a href="{{ $link['url'] }}" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300 flex items-center group">
                <span class="w-0 group-hover:w-2 h-px bg-indigo-400 transition-all duration-300 mr-0 group-hover:mr-3"></span>
                {{ $link['name'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>

      <!-- Services -->
      <div class="space-y-6">
        <h4 class="text-white font-semibold text-lg">Services</h4>
        <ul class="space-y-3">
          @php
            $services = [
              ['name' => 'Web Development', 'url' => '#'],
              ['name' => 'Mobile Apps', 'url' => '#'],
              ['name' => 'UI/UX Design', 'url' => '#'],
              ['name' => 'Consulting', 'url' => '#'],
            ];
          @endphp
          @foreach ($services as $service)
            <li>
              <a href="{{ $service['url'] }}" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300 flex items-center group">
                <span class="w-0 group-hover:w-2 h-px bg-indigo-400 transition-all duration-300 mr-0 group-hover:mr-3"></span>
                {{ $service['name'] }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>

  <div class="border-t border-gray-800 bg-black/50">
    <div class="max-w-7xl mx-auto px-8 py-6">
      <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-gray-400 text-sm">
          © {{ date('Y') }} Siti Marfungah Dwi Lestari. All rights reserved. Built with ❤️ and Blade.
        </p>
        <div class="flex items-center space-x-6 text-sm">
          <a href="#" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300">Privacy Policy</a>
          <a href="#" class="text-gray-400 hover:text-indigo-400 transition-colors duration-300">Terms of Service</a>
          <div class="flex items-center space-x-2 text-gray-500">
            <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
            <span>Available for work</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
