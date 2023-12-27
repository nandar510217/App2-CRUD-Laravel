@extends('master')
@include('navbar')
@section('content')
    <div class="container">
        <a href="{{ route('create') }}" class="btn btn-sm btn-primary float-end my-3">+ Create</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{$article->title}}</td>
                        <td>{{ $article->content }}</td>
                        <td class="">
                            <a href="{{ url('article/' .$article->id. '/edit')}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('article/' .$article->id) }}" method="post">
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