@extends('master')
@include('navbar', ['name' => 'Bella'])
@section('content')
    <div class="container">
        <a href="{{ url('article') }}" class="btn btn-sm btn-primary my-3"> << Back</a>
        <h4>Create Article</h4>
        <form action="{{ url('article') }}" method="post">
            @csrf
            <div class="my-3">
                <label for="">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
                {{-- <span class="text-danger">{{ $errors->first('title')}}</span> --}}
            </div>
            <div class="my-3">
                <label for="">Content</label>
                <textarea rows="3" name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror               
                {{-- <span class="text-danger">{{ $errors->first('title')}}</span> --}}
            </div>
            <button class="btn btn-sm btn-primary">Submit</button>
        </form>
    </div>
@endsection