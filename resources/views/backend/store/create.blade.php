@extends('backend.master')

@section('title', 'Add Store')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4 text-center">Add Store</h1>
                    <form action="{{route('stores.store')}}" method="POST" enctype="multipart/form-data">
                        @include('notify')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="title">

                            @error('title')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="slug">

                            @error('slug')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category</label><br>
                            <select name="category_id" id="" class="form-label bg-dark text-light px-5 py-2 border-dark rounded">
                                <option value="">Select Category</option>

                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            
                            @error('category_id')
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
                        
                        <button type="submit" class="btn btn-primary">Add Store</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
