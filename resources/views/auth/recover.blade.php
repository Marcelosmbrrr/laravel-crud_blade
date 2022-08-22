@extends("layouts.master")

@section("title", "Laravel | Register")

@section("content")
<div class="vh-100 d-flex flex-column justify-content-center align-items-center">
    <div class="btn-group mb-3" role="group" aria-label="Basic outlined example">
        <a href="{{ route('login') }}" class="btn btn-primary" aria-current="page">Login</a>
        <a href="{{ route('register') }}" class="btn btn-primary" aria-current="page">Register</a>
        <a href="#" class="btn btn-primary active" aria-current="page">Recover</a>
    </div>
    <div class = "shadow-sm p-3 mb-5 bg-body rounded" style="width: auto; background-color: green;">
        <form class = "p-3" method="POST" action="{{ route('action.send-link') }}">
            @csrf
            <div class="mb-3" style="width: 350px;">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}">
              @error('email')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
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