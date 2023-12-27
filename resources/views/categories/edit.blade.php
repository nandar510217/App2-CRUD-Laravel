@extends('master')
@include('navbar')
@section('content')
<div class="container">
    <a href="{{ url('categories')}}" class="btn btn-sm btn-primary my-3"> << Back</a>
    <h4>Edit Categories</h4>
    <form action="{{ url('categories/'. $category->id)}}" method="post">
        @csrf 
        @method('put')
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control">
        </div>
        <button class="btn btn-sm btn-primary">Update</button>
    </form>
</div>
@endsection