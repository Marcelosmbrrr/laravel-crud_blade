@extends("layouts.master")

@section("title", "Laravel | Login")

@section("content")
<div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
        <a href="#" class="btn btn-primary active" aria-current="page">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary" aria-current="page">Register</a>
        <a href="{{ route('recover') }}" class="btn btn-primary" aria-current="page">Recover</a>
    </div>
    <div class = "shadow-sm p-3 mb-5 bg-body rounded" style="width: auto; background-color: green;">
        <form class = "p-3" method="POST" action="{{ route('action.login') }}">
            @csrf
            <div class="mb-3" style="width: 350px;">
              <label for="name" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="name" value="{{ old('email') }}">
              @error('email')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3" style="width: 350px;">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password" value="{{ old('password') }}">
              @error('password')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="remember">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
</div>          
@endsection