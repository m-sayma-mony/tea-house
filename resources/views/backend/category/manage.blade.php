@extends('backend.master')

@section('title', 'Manage Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4 text-center">All Categories (Total: {{$categories->count()}})</h1>
                    @include('notify')
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    <img src="{{asset('/')}}{{$category->image}}" alt="" height="40" width="50">
                                </td>
                                <td>{{$category->status== 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('admin.category.edit', ['id' => $category->id])}}" class="btn btn-sm btn-light mb-1 ms-2">Edit</a><br>
                                    <a href="{{route('admin.category.destroy', ['id' => $category->id])}}" class="btn btn-sm btn-danger">Delete</a>
                                </td> 
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection