@extends('master')
@section('content')
    <div class="container">
        <h2 class="text-center mt-4">Login</h2>
        <div style="width: 400px; margin: auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('login-user')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>  
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div> 
                        <button class="btn btn-sm btn-primary">Login</button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection