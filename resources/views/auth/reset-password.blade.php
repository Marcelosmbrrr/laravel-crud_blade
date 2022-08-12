@extends("layouts.master")

@section("title", "Laravel | Register")

@section("content")
<div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
        <a href="{{ route('login') }}" class="btn btn-primary" aria-current="page">Login</a>
    </div>
    <div class = "shadow-sm p-3 mb-5 bg-body rounded" style="width: auto; background-color: green;">
        <form class = "p-3" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input name="token" type="text" class="form-control" id="token" hidden value="{{ $token }}">
            <div class="mb-3" style="width: 350px;">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email">
                @error('email')
                <div class="form-text text-start text-danger">{{ $message }}</div>
                @enderror
              </div>
            <div class="mb-3" style="width: 350px;">
              <label for="password" class="form-label">New password</label>
              <input name="password" type="password" class="form-control" id="password">
              @error('password')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3" style="width: 350px;">
                <label for="confirmation" class="form-label">New password confirmation</label>
                <input name="password_confirmation" type="password" class="form-control" id="confirmation">
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