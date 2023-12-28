@extends('master')
@include('navbar')
@section('content')
    <div class="container my-3">
        <a href="{{ route('create') }}" class="btn btn-sm btn-primary float-end my-3">+ Create</a>
        {{-- <span>{{session()->get('successMsg')}}</span> --}}

        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="info-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              An example success alert with an icon
            </div>
        </div> --}}

        @if(session()->has('successMsg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('successMsg')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

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
        {{-- {{$articles->links('pagination::bootstrap-5')}} --}}
        {{ $articles->links() }}
    </div>
@endsection