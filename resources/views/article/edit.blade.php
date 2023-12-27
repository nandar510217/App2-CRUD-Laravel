@extends('master')
@include('navbar', ['name' => 'Bella'])
@section('content')
    <div class="container">
        <a href="{{ url('article') }}" class="btn btn-sm btn-primary my-3"> << Back</a>
        <h4>Edit Article</h4>
        <form action="{{ url('article/' .$article->id) }}" method="post">
            @csrf @method('put')
            <div class="my-3">
                <label for="">Title</label>
                <input type="text" name="title" value="{{ $article->title }}" class="form-control">
            </div>
            <div class="my-3">
                <label for="">Content</label>
                <textarea rows="3" name="content" class="form-control">{{ $article->content }}</textarea>
            </div>
            <button class="btn btn-sm btn-primary">Update</button>
        </form>
        </div>
@endsection