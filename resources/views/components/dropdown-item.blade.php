@props(['active' => false])

@php
$classes = 'block pl-3 py-1 hover:bg-gray-300 focus:bg-gray-300';

if($active) $classes = 'block pl-3 py-1 bg-gray-300'
@endphp

<a {{$attributes(['class'=>$classes])}}>{{ $slot }}</a>
