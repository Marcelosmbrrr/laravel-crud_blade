@extends("layouts.internal")

@section("main")

<div class="d-flex  justify-content-center align-items-center mt-5">
    <div class = "shadow-sm p-3 mb-5 bg-body rounded" style="width: auto; background-color: green;">
        <form class = "p-3" method="POST" action="{{ route('user.update', Auth::user()->id) }}">
            @csrf
            <div class="mb-3" style="width: 350px;">
              <label for="name" class="form-label">Name</label>
              <input name="email" type="email" class="form-control" id="name" value = "{{ Auth::user()->name }}">
              @error('name')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3" style="width: 350px;">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" value = "{{ Auth::user()->email }}">
              @error('email')
              <div class="form-text text-start text-danger">{{ $message }}</div>
              @enderror
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div> 
</div>  

@endsection
