@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            @if ($post->image)
            <div style="max-height: 800px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-2" alt="{{ $post->category->name }}">
            </div>
            @else
                <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="img-fluid mb-2" alt="{{ $post->category->name }}">
            @endif

            <h6>Penulis : <a href="/posts?user={{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a></h6>
            <h6>Kategori : <a href="/posts?category={{  $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></h6>

            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            <a href="/posts">Back To Posts</a>
        </div>
    </div>
</div>

@endsection