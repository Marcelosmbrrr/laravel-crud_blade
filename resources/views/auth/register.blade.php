@extends("layouts.master")

@section("title", "Laravel | Register")

@section("content")
<div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
        <a href="{{ route('login') }}" class="btn btn-primary" aria-current="page">Login</a>
        <a href="#" class="btn btn-primary active" aria-current="page">Register</a>
        <a href="{{ route('recover') }}" class="btn btn-primary" aria-current="page">Recover</a>
    </div>
    <div class = "shadow-sm p-3 mb-5 bg-body rounded" style="width: auto; background-color: green;">
        <form class = "p-3" method="POST" action="{{ route('action.register') }}">
            @csrf
            <div class="mb-3" style="width: 350px;">
              <label for="name" class="form-label">Name</label>
              <input name="name" type="name" class="form-control" id="name" value="{{ old('name') }}">
              @error('name')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3" style="width: 350px;">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}">
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
            <div class="mb-3" style="width: 350px;">
                <label for="confirmation" class="form-label">Password confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="confirmation">
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                <script> setTimeOut(() => { window.location = "/" }, 2000)</script>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
</div>          
@endsection