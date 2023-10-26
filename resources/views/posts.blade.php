@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h3><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a>
            </h3>
            
            
            <p>By. <a href="#">{{$post->user->name}}</a> <a class="text-decoration-none" href="/categories/{{$post ->category->slug }}">{{ $post->category->name }} </a> </p>

            <p>{{ $post->excerpt }}</p>

            <a class="text-decoration-none" href="/post/{{ $post->slug}}">Read More..</a>
        </article>
    @endforeach

@endsection