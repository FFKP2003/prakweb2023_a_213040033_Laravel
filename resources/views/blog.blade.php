@extends('layouts.main')

@section('container')
        <h1 class= 'mb-5'>{{ $blog->tittle }}</h1>

        {!! $blog->body !!}

    <a href="/blogs">Back to blogs</a>
@endsection

