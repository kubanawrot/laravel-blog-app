<x-layout>
  <section class="px-6 py-8">
    <main class="max-w-lg mx-auto my-12 lg:my-28 bg-gray-800 p-8 rounded-md shadow-sm">
      <h1 class="text-2xl font-semibold mb-8 lg:mb-16 text-gray-100">
        Log in<span class="text-blue-400">!</span>
      </h1>

      <form method="POST" action="/login">
        @csrf
        <div class="mb-6 relative">
          <input
            type="text"
            name="email"
            id="email"
            required
            class="register"
            value="{{ old('email') }}"
          />
          <label for="email" class="register">Email</label>

          @error('email')
          <p class="text-red-400 text-xs font-semibold mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-8 lg:mb-12 relative">
          <input type="password" name="password" id="password" required class="register" />
          <label for="password" class="register">Password</label>

          @error('password')
          <p class="text-red-400 text-xs font-semibold mt-2">{{ $message }}</p>
          @enderror
        </div>
        <div class="text-right">
          <button
            type="submit"
            class="px-4 py-2 bg-blue-400 rounded-md text-white font-semibold hover:bg-blue-500"
          >
            Submit
          </button>
        </div>
        @if($errors->any())
        <div class="p-4 mt-4 text-red-300 text-center text-xs">
          <p>Your form contains errors. Please check it!</p>
        </div>
        @endif
      </form>
    </main>
  </section>
</x-layout>
