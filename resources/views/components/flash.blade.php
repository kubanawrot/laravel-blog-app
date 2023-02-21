@if(session()->has('success'))
<div
  class="fixed bottom-6 right-6 px-8 py-6 text-white font-semibold text-md rounded-md bg-blue-400"
  x-data="{show : true}"
  x-init="setTimeout(()=> show = false, 5000)"
  x-show="show"
  x-transition
>
  <p>{{ session("success") }}</p>
</div>
@endif
