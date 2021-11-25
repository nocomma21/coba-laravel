@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $posts->slug }}</h2>

                <p>By. <a href="/authors/{{ $posts->author->username }}" class="text-decoration-none">
                    {{ $posts->author->name }}</a> in <a href="/categories/{{ $posts->category->slug }}"
                    class="text-decoration-none"> {{ $posts->category->name }}</a></p>

                    <img src="https://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
            
                    <article class="my-3 fs-5">
                        {!! $posts->body !!} 
                    </article>
            
                <a href="/blog" class="d-block text-decoration-none mt-3">Back to blog</a>
            </div>
        </div>
    </div>

@endsection