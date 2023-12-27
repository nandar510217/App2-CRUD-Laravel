@extends('master')
@include('navbar')
@section('content')
<div class="container">
    <a href="{{ url('categories')}}" class="btn btn-sm btn-primary my-3"> << Back</a>
    <h4>Create Categories</h4>
    <form action="{{ url('categories')}}" method="post">
        @csrf
        <div class="my-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
@endsection