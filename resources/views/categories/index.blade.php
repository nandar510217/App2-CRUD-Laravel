@extends('master')
@include('navbar')
@section('content')
    <div class="container">
        <a href="{{ url('categories/create')}}" class="btn btn-sm btn-primary float-end my-3">+ Create</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)                    
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="{{'categories/' .$category->id. '/edit' }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('categories/' .$category->id)}}" method="post">
                                @csrf @method('delete')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
@endsection