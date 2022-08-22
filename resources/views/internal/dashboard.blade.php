@extends("layouts.internal")

@section("page", "Dashboard")

@section("main")

<div style = "display: flex;">
    <div class="card" style="width: 18rem; margin-right: 30px;">
        <div class="card-body">
          <h3 class="card-title">Users</h3>
          <p class="card-text">Total: {{ $data["users"] }}</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h3 class="card-title">Posts</h3>
          <p class="card-text">Total: {{ $data["posts"] }}</p>
        </div>
      </div>
</div>

@endsection
