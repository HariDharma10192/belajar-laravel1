@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body pb-0 d-flex justify-content-between">
                        <div>
                            <h1 class="mb-1">My Posts, {{ auth()->user()->name}}.</h1>
                            {{-- <p>Total Earnings of the Month</p>
                            <h3 class="m-0">$ 12,555</h3> --}}
                            
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
<div class="container-fluid">
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="/dashboard/posts/create" class="btn btn-primary pull-right">Create New Post</a>

                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post )
                                    
                                <tr>
                                    <td>{{$loop -> iteration}}</td>
                                    <td>{{$post -> title}}</td>
                                    <td>{{$post -> category -> name}}</td>
                                    <td>
                                        <a href="/dashboard/posts/{{$post->slug}}" class="btn btn-info">
                                            <i class="fa fa-file"> Read</i> 
                                        </a>
                                        
                                        <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning">
                                            <i class="fa fa-edit"> Edit</i> 
                                        </a>
                                        <form action="/dashboard/posts/{{$post->slug}}"  method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" >
                                            <i class="fa fa-trash"> Delete</i> 
                                        </button>
                                        </form>
                                                                                                                                                                                  
                                    </td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection