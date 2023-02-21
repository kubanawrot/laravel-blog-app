@props(['trigger'])
<div x-data="{ open: false }">
  <div @click="open = ! open">{{ $trigger }}</div>
  <div
    x-show="open"
    @click.outside="open = false"
    class="text-left py-1 text-sm bg-gray-100 absolute w-full rounded-xl pt-2 mt-2 z-10 max-h-48 overflow-auto"
    style="display: none"
  >
    {{ $slot }}
  </div>
</div>
