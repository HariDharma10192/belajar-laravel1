@extends('dashboard.layouts.main')

@section('container')
<div class="container my-3">
    <div class="row ">
        <div class="col-lg-8">
            <h1 class="mb-5">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"> <i class="fa fa-step-backward"></i> Back to my Post</a>
            <a href="" class="btn btn-warning"> <i class="fa fa-pencil-square-o"></i> Back to my Post</a>
            <a href="" class="btn btn-danger"> <i class="fa fa-trash-o"></i> Back to my Post</a>

            {{-- <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category=/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> --}}
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"  class="mb-4 mt-3 img-fluid" alt="{{ $post->category->name }}">
            <article class="my-3">
                {!! $post->body !!}  
            </article>                
            <a href="/posts" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>

    
@endsection