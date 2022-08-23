@extends("layouts.master")

@section("title", "Laravel | Dashboard")

@section("content")

<div style = "height: 100vh;">

    <header class="navbar bg-light shadow-sm p-3">
        <div class="container-fluid">
            <div style = "margin-left: 20px;">
                <a class="navbar-brand"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" width="40px"/> Laravel</a>
            </div> 
            <nav>
                @auth
                <a class="btn btn-outline-primary" href="{{ route('my-profile') }}" role="button">My profile</a>
                @endauth
                <a class="btn btn-outline-danger" href="{{ route('action.logout') }}" role="button">Logout</a>
            </nav>
        </div>
    </header>
    
    <div class="container-fluid">
        <div class="row">
        
            <div class="col">
                <div class = "p-4">
                    <div class = "row mb-3">
                        <h1 style = "color: #8813FC;">@yield("page")</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('dashboard-panel') }}">Dashboard</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('users-panel') }}">Users</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('posts-panel') }}">Posts</a></li>
                        </ol>
                    </nav>
                    <div class = "row">
                        @yield("main")
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection