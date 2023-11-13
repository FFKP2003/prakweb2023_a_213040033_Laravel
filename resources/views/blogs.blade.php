@extends('layouts.main')

@section('container')

   @foreach ($blogs as $blog)
   <article class="mb-5">
   <h2><a href="blogs/{{ $blog["slug"] }}">{{ $blog->tittle }}</a></h2>
   <h5>By: {{ $blog["author"] }}</h5>
   <p>{{ $blog->excerpt }} </p>
   </article>
   @endforeach
   
@endsection