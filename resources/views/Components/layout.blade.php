<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-full">

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
              <div class="shrink-0">
                <img class="size-8" src="https://laracasts.com/images/logo/logo-triangle.svg" alt="Your Company">
              </div>
              <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                  <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                  <x-nav-link href="/jobs" :active="request()->is('Jobs')">Jobs</x-nav-link>
                  <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
              </div>
            </div>
            <!-- Log in and Register buttons -->
            <div class="hidden md:flex ml-auto">
              <div class="flex items-center space-x-4">

                <!-- Not registered -->
                @guest
                <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                @endguest
                <!-- Registered user -->
                @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <x-form-button>Log out</x-form-button>
                    </form>
                @endauth

              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu icons -->
                <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>


    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
        <x-button href="/jobs/create">Create Job</x-button>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
      </div>
    </main>
  </div>

</body>
</html>
