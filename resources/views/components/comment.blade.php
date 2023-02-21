@props(['comment'])
<article class="grid grid-cols-8 gap-4 bg-gray-800 p-4 rounded-xl">
  <div class="col-span-2 rounded-full">
    <img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" alt="" class="rounded-xl" />
  </div>
  <div class="col-span-6">
    <header class="mb-4">
      <h3 class="font-bold">{{ $comment->author->username }}</h3>
      <p class="text-xs">
        Posted <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
      </p>
    </header>

    <p>
      {{ $comment->body }}
    </p>
  </div>
</article>
