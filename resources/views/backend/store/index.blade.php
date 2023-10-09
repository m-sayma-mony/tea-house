@extends('backend.master')

@section('title', 'Manage Store')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1 class="mb-4 text-center">All Stores (Total: )</h1>
                    @include('notify')
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Id</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$store->id}}</td>
                                <td>{{$store->title}}</td>
                                <td>{{$store->slug}}</td>
                                <td>{{$store->category->name}}</td>
                                <td>{{$store->description}}</td>
                                <td>
                                    <img src="{{asset($store->image)}}" alt="" width="50">
                                </td>
                                <td>{{$store->status == 1 ? 'Active' : 'Inactive'}}</td>
                                <td>
                                    <a href="{{route('stores.edit', $store->id)}}" class="btn">
                                        <i class="fa fa-edit text-light"></i>
                                    </a>
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