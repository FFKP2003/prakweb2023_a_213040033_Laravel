@extends('layouts.main')

@section('container')

   @foreach ($blogs as $blog)
   <article class="mb-5">
   <h2><a href="blogs/{{ $blog["slug"] }}">{{ $blog["judul"] }}</a></h2>
   <h5>By: {{ $blog["author"] }}</h5>
   <p>{{ $blog["body"] }} </p>
   </article>
   @endforeach
   
@endsection