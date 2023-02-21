<header class="max-w-xl mx-auto mt-20 text-center">
  <h1 class="text-4xl">Latest <span class="text-blue-500">Blog</span> Posts</h1>
  <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8 flex justify-center items-end">
    <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl">
      <x-category-dropdown></x-category-dropdown>
    </div>
    <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 h-10">
      <form method="GET" action="#">
          @if(request('category'))
              <input type="hidden" name="category" id="" value="{{request('category')}}">
          @endif
        <input
          type="text"
          name="search"
          placeholder="Find something"
          class="bg-transparent placeholder-black font-semibold text-sm focus:outline-none focus:placeholder-gray-300"
          value="{{ request('search') }}"
        />
      </form>
    </div>
  </div>
</header>
