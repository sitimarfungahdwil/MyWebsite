{{-- resources/views/pages/landing.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-gray-700 via-gray-900 to-black text-white">

  {{-- Background Elements --}}
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-purple-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-500/5 rounded-full blur-3xl"></div>
  </div>

  {{-- Floating Decorative Elements --}}
  <div class="absolute top-20 left-20 w-6 h-6 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-60 animate-bounce"></div>
  <div class="absolute top-32 right-32 w-4 h-4 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-full opacity-40 animate-ping"></div>
  <div class="absolute bottom-20 left-1/3 w-8 h-8 bg-gradient-to-r from-green-400 to-blue-400 rounded-full opacity-50 animate-bounce"></div>

  <div class="text-center z-10 max-w-4xl mx-auto px-6">
    {{-- Greeting --}}
    <div class="mb-6">
      <span class="inline-block px-4 py-2 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-full text-purple-300 text-sm font-medium border border-purple-500/30">
        👋 Hello, I'm
      </span>
    </div>

    {{-- Name --}}
    <h1 class="text-6xl md:text-8xl font-bold mb-6 bg-gradient-to-r from-white via-purple-200 to-pink-200 bg-clip-text text-transparent">
      <span class="bg-gradient-to-r from-purple-400 via-pink-400 to-blue-400 bg-clip-text text-transparent animate-gradient-x bg-[length:200%_200%]">
        Siti Marfungah
      </span>
    </h1>

    {{-- Tagline --}}
    <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
      Guided by logic, driven by innovation.
    </p>

    {{-- CTA Buttons --}}
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
      <a href="{{ route('hireme.index') }}" class="px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full text-white font-semibold text-lg transition-all duration-300 hover:from-purple-500 hover:to-pink-500 flex items-center gap-2">
        <i class="lucide lucide-briefcase w-5 h-5"></i>
        AVAILABLE FOR FREELANCE
        <span class="ml-2 ">&rarr;</span>
      </a>
    </div>

    {{-- Certifications --}}
    <div class="flex flex-wrap justify-center gap-6 mb-12">
      <div class="flex items-center gap-2 px-6 py-3 bg-white/5 backdrop-blur-sm rounded-full border border-white/10 hover:border-purple-400/50 transition-all duration-300 animate-pulse">
        <i data-lucide="award" class="w-5 h-5 text-yellow-400"></i>
        <span class="text-gray-300 font-medium">CERTIFICATION</span>
      </div>
      <div class="flex items-center gap-2 px-6 py-3 bg-white/5 backdrop-blur-sm rounded-full border border-white/10 hover:border-blue-400/50 transition-all duration-300 animate-pulse delay-500">
        <div class="w-5 h-5 bg-gradient-to-r from-blue-400 to-cyan-400 rounded-sm flex items-center justify-center text-xs font-bold text-white">
          K
        </div>
        <span class="text-gray-300 font-medium">KANBAN</span>
      </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="flex flex-col items-center">
      <span class="text-gray-400 text-sm mb-4">Scroll to explore</span>
      <div class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-400/30 animate-bounce text-xl text-gray-300">↓</div>

    </div>
  </div>
</div>
@endsection
