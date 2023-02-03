@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-uppercase">{{ $post->title }}</h1>
        @if (isset($post->category->name))
            <h2>Nella categoria: {{ $post->category->name }}</h2>
        @endif
        @if ($post->tags->all())
            <h2 class="d-inline me-1">Tags: </h2>
            @foreach ($post->tags as $tag)
                {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
            @endforeach
        @endif

        {{-- <img src="{{ $post->image }}" alt="{{ $post->title }}"> --}}
        <img class="d-block mt-4" src="{{ asset('storage/' . $post->uploaded_img) }}" alt="{{ $post->title }}">
        <p class="mt-5">
            {{ $post->content }}
        </p>
    </div>
@endsection
