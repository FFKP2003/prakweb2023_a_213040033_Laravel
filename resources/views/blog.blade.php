@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $blog['judul'] }}</h2>
        <h5>{{ $blog['author'] }}</h5>
        <p>{{ $blog['body'] }}</p>
    </article>
    
    <a href="/blogs">Back to blogs</a>
@endsection