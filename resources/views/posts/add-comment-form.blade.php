@guest
    <div class="rounded-xl bg-gray-800 p-4">
        <p>Want to participate in discussion? <a href="/register" class="text-blue-400">Register</a> or <a href="/login"
                class="text-blue-400">login!</a></p>
    </div>
@endguest
@auth
    <form method="POST" action="/posts/{{ $post->slug }}/comments"
        class="grid grid-cols-8 gap-4 rounded-xl bg-gray-800 p-4">
        @csrf
        <div class="col-span-8 flex gap-4 rounded-full">
            <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" class="h-16 rounded-xl" />
            <header class="col-span-full pb-4 font-semibold">
                <h2>Want to participate?</h2>
            </header>
        </div>
        <div class="relative col-span-8">
            <textarea type="text" name="body" id="name" class="input grow" value="{{ old('name') }}"></textarea>
            <label for="name" class="register">What do you think about?</label>
            @error('body')
                <p class="mt-2 text-xs font-semibold text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-span-full mt-2 flex justify-end">
            <button type="submit" class="rounded-md bg-blue-400 px-4 py-2 font-semibold text-white hover:bg-blue-500">
                Comment
            </button>
        </div>
    </form>
@endauth
