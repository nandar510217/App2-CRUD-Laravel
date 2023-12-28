@extends('master')
@include('navbar')
@section('content')
<div class="container">
    <a href="{{ route('index')}}" class="btn btn-sm btn-primary my-3"> << Back</a>
    <h4>Edit Post</h4>
    <form action="{{ route('update', ['id' => $post->id])}}" method="post">
        @csrf 
        @method('put')
        <div class="my-3">
            <label for="">Title</label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control">
        </div>
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$post->name}}" class="form-control">
        </div>
        <button class="btn btn-sm btn-primary">Update</button>
    </form>
</div>
@endsection