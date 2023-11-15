@extends('layouts.main')

@section('container')
        <h1 class= 'mb-5'>{{ $blog->tittle }}</h1>

        <p>By : <a href="/authors/{{ $blog->author->username }}" class="text-decoration-none"> {{ $blog->author->name   }}</a> in <a href="/categories/{{ $blog->category->slug  }}" class="text-decoration-none">{{  $blog->category->name  }}</a></p>
        {!! $blog->body !!}

    <a href="/blogs" class=d-block mt-3>Back to blogs</a>
@endsection

