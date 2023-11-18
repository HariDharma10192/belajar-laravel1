
@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">

<div class="row">
   
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Edit  Post</h2>
                <div class="basic-form">
                    <form method="post" action="/dashboard/posts/{{$post->slug}}"  class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" 
                             id="title" class="form-control" placeholder="title" name="title" required value="{{old('title',$post->title)}} ">
                            
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div >
                                <input type="text" @error('slug')
                                is-invalid
                            @enderror id="slug" class="form-control" placeholder="slug" name="slug" required value="{{old('slug',$post->slug)}}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        </div>                    
                       
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="category">Category list (select one):</label>
                            <select class="form-control" id="category" name="category_id">
                                @foreach ($categories as $category)
                                @if (old('category_id',$post->category_id) === $category->id)                           
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
                                <input type="hidden" name="oldImage" value="{{$post->image}}">
                                @if ($post->image)
                                <img src="/storage/{{ $post->image }}" alt="" width="50px">
                                @else
                                <img src="" alt="" class="mb-3 col-sm-5 img-preview img-fluid">

                                @endif
                                <input class="form-control"  name="image" type="file" id="image" onchange="previewImage()">
                            </div>
                        </div>

                        <div class=" form-group row">
                            <label for="body" class="form-label"></label>
                            <input id="body" for="body"  type="hidden" name="body" required value="{{old('body',$post->body)}} ">
                            <trix-editor input="body"></trix-editor>


                        </div>
  

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark">Update Post</button>
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

    function previewImage(){

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display ='block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload =function (oFREvent){
        imgPreview.src= oFREvent.target.result;
        }


    }
</script>

<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

@endsection
