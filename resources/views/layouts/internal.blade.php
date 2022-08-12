@extends("layouts.master")

@section("title", "Laravel | Dashboard")

@section("content")
<nav class="navbar bg-light" style="margin-bottom: 150px;">
    <div class="container-fluid">
      <a class="navbar-brand">Laravel</a>
      <div>
        @auth
          <a class="btn btn-outline-primary" href="{{ route('my-profile') }}" role="button">My profile</a>
        @endauth
          <a class="btn btn-outline-danger" href="{{ route('action.logout') }}" role="button">Logout</a>
      <div>
    </div>
</nav>
<main>
    @yield("main")
</main>
@endsection