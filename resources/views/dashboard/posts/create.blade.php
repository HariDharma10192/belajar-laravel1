
@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

<div class="row">
   
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Create New Post</h2>
                <div class="basic-form">
                    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" 
                             id="title" class="form-control" placeholder="title" name="title" required value="{{old('title')}}">
                            
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" @error('slug') is-invalid @enderror id="slug" class="form-control" placeholder="slug" name="slug" required value="{{old('slug')}}">
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                            
                        {{-- <select class="form-control" id="category" name="category_id">
                            <option value="" selected disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}" {{ old('category_id') === $category->id ? 'selected' : '' }}>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select> --}}
                        
                       
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="category">Category list (select one):</label>
                            <select class="form-control" id="category" name="category_id">
                                @foreach ($categories as $category)
                                @if (old('category_id')=== $category->id)                           
                                <option value="{{$category->id}}" selected >{{$category->name}}</option>
                                @else
                                <option value="{{$category->id}}" >{{$category->name}}</option>

                                @endif 
                                @endforeach
                             
                            </select>
                        </div>
                       

                        <div class="form-group row">
                            <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <input class="form-control"  name="image" type="file" id="image">
                            </div>
  </div>
  <div class=" form-group row">
    <label for="body" class="form-label"></label>
    <input id="body" for="body"  type="hidden" name="body" required value="{{old('body')}} ">
    <trix-editor input="body"></trix-editor>


</div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark">Create Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title='+title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug);
        });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

@endsection
