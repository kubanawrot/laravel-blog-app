<!DOCTYPE html>

<title>Blog App</title>

<link rel="preconnect" href="https://fonts.gstatic.com" />
<link
  href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
  rel="stylesheet"
/>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
@vite('resources/css/app.css')
<body style="font-family: Open Sans, sans-serif">
  <section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
      <div class="text-gray-200 font-semibold">
        <a href="/">Blog<span class="text-blue-400">App</span> </a>
      </div>
      <div class="mt-8 md:mt-0 flex items-center space-x-6">
        @guest
        <a href="/login" class="button button--primary">Log in</a>
        <a href="/register" class="button button--primary">Register</a>
        @else
        <p class="block">Welcome, {{ auth()->user()->username }}!</p>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="button button--secondary">Log Out</button>
        </form>
        @endguest

        <a href="#newsletter" class="button button--secondary"> Subscribe for Updates </a>
      </div>
    </nav>
    {{ $slot }}
    <footer
      class="bg-gray-800 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16" id="newsletter"
    >
      <img
        src="/images/lary-newsletter-icon.svg"
        alt=""
        class="mx-auto mb-6"
        style="width: 145px"
      />
      <h5 class="text-3xl">Stay in touch with the latest posts</h5>
      <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>
      <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-md">
          <form method="POST" action="/newsletter" class="lg:flex text-sm">
            @csrf
            <div class="lg:py-3 lg:px-5 flex items-center">
              <label for="email" class="hidden lg:inline-block">
                <img src="/images/mailbox-icon.svg" alt="mailbox letter" />
              </label>
              <input
                id="email"
                name="email"
                type="text"
                placeholder="Your email address"
                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none"
              />
            </div>
            <button
              type="submit"
              class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-md text-xs font-semibold text-white uppercase py-3 px-8"
            >
              Subscribe
            </button>
            @error('email')
            <p class="text-red-400 text-xs font-semibold mt-2 absolute -bottom-6 left-0">{{ $message }}</p>
            @enderror
          </form>
        </div>
      </div>
    </footer>
  </section>
  <x-flash></x-flash>
</body>
