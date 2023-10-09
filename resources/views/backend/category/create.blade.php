@extends('backend.master')

@section('title', 'Add Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4 text-center">Add Category</h1>
                    <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                        @include('notify')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <input type="text" class="form-control bg-dark" id="exampleInputPassword1" name="description">

                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input type="file" class="form-control bg-dark" id="exampleInputPassword1" name="image">

                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
