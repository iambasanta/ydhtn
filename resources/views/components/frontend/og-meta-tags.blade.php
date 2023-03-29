@props([
    'title' => config('app.name'),
    'description' => '',
    'image' => '',
    'url' => '',
    'type' => 'article',
])

@php
    $url = $url ?: url()->current();
    $image = $image ?:  asset('logo/logo.png') ;
@endphp

<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{!! $description !!}" />
<meta property="og:image" content="{{ $image }}" />
<meta property="og:url" content="{{ $url }}" />
<meta property="og:type" content="{{ $type }}" />
