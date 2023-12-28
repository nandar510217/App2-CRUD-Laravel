@extends('master')
@include('navbar')
@section('content')
    <div class="container">
        <a href="{{ route('createForm')}}" class="btn btn-sm btn-primary float-end my-3">+ Create</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->name}}</td>
                        <td>
                            <a href="{{ route('edit', ['id' => $post->id])}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{route('delete', ['id' => $post->id])}}" method="post">
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