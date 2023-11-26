@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
      <div class="col-lg-8">
        <h1 class= 'mb-3'>{{ $blog->tittle }}</h1>

        <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all My Blogs</a>
        <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
        </form>

        @if($blog->image)
        <div style="max-height: 350px; overflow:hidden;">
        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->category->name }}" class="img-fluid mt-3">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?{{ $blog->category->name }}" alt="{{ $blog->category->name }}" class="img-fluid mt-3">
        @endif

        <article class="my-3 fs-5">
        {!! $blog->body !!}
        </article>

       </div>
    </div>
</div>
@endsection