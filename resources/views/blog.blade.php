@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h1 class= 'mb-3'>{{ $blog->tittle }}</h1>

        <p>By : <a href="/blogs?author={{ $blog->author->username }}" class="text-decoration-none"> {{ $blog->author->name   }}</a> in <a href="/blogs?category={{ $blog->category->slug  }}" class="text-decoration-none">{{  $blog->category->name  }}</a></p>
     @if($blog->image)
      <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->category->name }}" class="img-fluid">
      </div>
     @else
        <img src="https://source.unsplash.com/1200x400?{{ $blog->category->name }}" alt="{{ $blog->category->name }}" class="img-fluid">
     @endif        
        <article class="my-3 fs-5">
        {!! $blog->body !!}
        </article>

        <a href="/blogs" class=d-block mt-3>Back to blogs</a>
       </div>
    </div>
</div>
@endsection

