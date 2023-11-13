@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Post Blogs </h1>
   @foreach ($blogs as $blog)
   <article class="mb-3">
   <h2><a href="blogs/{{ $blog["slug"] }}">{{ $blog->tittle }}</a></h2>
   <p>{{ $blog->excerpt }} </p>
   </article>
   @endforeach
   
@endsection