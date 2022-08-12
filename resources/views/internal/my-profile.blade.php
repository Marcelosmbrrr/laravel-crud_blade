@extends("layouts.internal")

@section("main")
<div class="vw-100 vh-100 d-flex justify-content-center align-items-center">
  <form id="formulary" action="{{ route('user.update', Auth::user()->id) }}">
      <div class="mb-3" style="width: 350px;">
        <label for="name" class="form-label">
        <input name="name" class="form-control" id="name" value="{{ Auth::user()->name }}" disabled>
        @error('name')
        <div class="form-text text-start text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3" style="width: 350px;">
        <label for="email" class="form-label">
        <input name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
        @error('email')
        <div class="form-text text-start text-danger">{{ $message }}</div>
        @enderror
      </div>
  </form>
</div>
@endsection
