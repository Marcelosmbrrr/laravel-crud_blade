@extends("layouts.internal")

@section("main")

<div class="d-flex  justify-content-center align-items-center mt-5">
    <div class = "d-flex flex-column">
        <div class = "mb-2">
            <a class="btn btn-secondary" href="{{ route('dashboard') }}" role="button">Dashboard</a>
        </div>
        <div class = "shadow-sm p-3 mb-5 bg-body rounded" style="width: auto;">
            <form class = "p-3" action="{{ route('user.update', $user->id) }}" method="POST">
                @method("PUT")
                @csrf
                <div class="mb-3" style="width: 350px;">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" value = "{{ $user->name }}">
                @error('name')
                <div class="form-text text-start text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3" style="width: 350px;">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" value = "{{ $user->email }}">
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
</div>  

@endsection
