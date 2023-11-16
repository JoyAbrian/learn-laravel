@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts/">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('user'))
                <input type="hidden" name="user" value="{{ request('user') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
        <div style="max-height: 800px; overflow:hidden">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid mb-2" alt="{{ $posts[0]->category->name }}">
        </div>
        @else
            <img src="https://source.unsplash.com/800x400?{{ $posts[0]->category->name }}" class="img-fluid mb-2" alt="{{ $posts[0]->category->name }}">
        @endif
    <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                    class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3><br>

            <h6>Penulis : <a href="/posts?user={{ $posts[0]->user->username }}"
                    class="text-decoration-none">{{ $posts[0]->user->name }}</a></h6>
            <h6>Kategori : <a href="/posts?category={{ $posts[0]->category->slug }}"
                    class="text-decoration-none">{{ $posts[0]->category->name }}</a></h6>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>

            <p class="card-text"><small
                    class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small></p>

        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                href="/posts?category={{ $post->category->slug }}"
                                class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-2" alt="{{ $post->category->name }}">
                                @else
                                    <img src="https://source.unsplash.com/800x400?{{ $post->category->name }}" class="img-fluid mb-2" alt="{{ $post->category->name }}">
                                @endif
                                            <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h6>Penulis : <a href="/posts?user={{ $post->user->username }}"
                                    class="text-decoration-none">{{ $post->user->name }}</a></h6>

                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More...</a>

                            <p class="card-text"><small
                                    class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <p class="text-center fs-4">No Post Found.</p>
@endif

<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>

@endsection