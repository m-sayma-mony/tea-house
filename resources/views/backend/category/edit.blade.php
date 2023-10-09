@extends('backend.master')

@section('title', 'Edit Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4 text-center">Edit Category</h1>
                    <form action="{{route('admin.category.update', ['id' => $categories->id])}}" method="POST" enctype="multipart/form-data">
                        @include('notify')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$categories->name}}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <input type="text" class="form-control bg-dark" id="exampleInputPassword1" name="description" value="{{$categories->description}}">

                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Image</label><br>
                            <img src="{{asset('/')}}{{$categories->image}}" alt="" height="40" width="50" class="mb-2">
                            <input type="file" class="form-control bg-dark" id="exampleInputPassword1" name="image">
                            
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
