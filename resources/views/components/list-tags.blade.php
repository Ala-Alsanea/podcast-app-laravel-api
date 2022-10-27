@props(['tagsCSV'])

@php
// echo $tagsCSV;

$tags = explode(',', trim($tagsCSV));
for ($i = 0; $i < count($tags); $i++) {
    $tags[$i] = trim($tags[$i]);
}

@endphp


<ul class="flex">
    @foreach ($tags as $tag)
        <li class="flex items-center justify-centertext-xs bg-black text-white rounded-xl px-3 py-1 mr-2">
            <a href="/jobs?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach

</ul>
