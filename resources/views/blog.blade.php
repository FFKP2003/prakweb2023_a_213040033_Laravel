@extends('layouts.main')

@section('container')
        <h1 class= 'mb-5'>{{ $blog->tittle }}</h1>

        <p>By : Faqih Firdaus Kemal Pangestu in <a href="/categories/{{ $blog->category->slug }} ">{{  $blog->category->name  }}</a></p>
        {!! $blog->body !!}

    <a href="/blogs">Back to blogs</a>
@endsection

