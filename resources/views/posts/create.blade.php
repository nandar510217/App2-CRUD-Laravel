@extends('master')
@include('navbar')
@section('content')
<div class="container">
    <a href="{{ route('index') }}" class="btn btn-sm btn-primary my-3"> << Back</a>
    <h4>Create Post</h4>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="my-3">
            <label for="">Title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <span class="invalid-feedback">{{$message}}</span>
            @enderror
        </div>
        <button class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
@endsection