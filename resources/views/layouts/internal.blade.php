@extends("layouts.master")

@section("title", "Laravel | Dashboard")

@section("content")
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
        <nav class = "col-md-1 d-none d-md-block bg-light sidebar" style="min-width: 220px;">
            <div class = "sidebar-sticky">
                <ul class = "nav flex-column fw-bolder" style = "padding-top: 10px;">
                    <li class = "nav-item" style="padding: 10px 10px 10px 0px;">
                        <a class = "nav-link" href = "{{ route('dashboard-panel') }}" style = "color: #222;">
                            Dashboard
                        </a>
                    </li>
                    <li class = "nav-item" style="padding: 10px 10px 10px 0px;">
                        <a class = "nav-link" href = "{{ route('users-panel') }}" style="color: #222;">
                            Users
                        </a>
                    </li>
                    <li class = "nav-item" style="padding: 10px 10px 10px 0px;">
                        <a class = "nav-link" href = "{{ route('posts-panel') }}" style="color: #222;">
                            Posts
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <div class="col">
            <div class = "p-4">
                <div class = "row mb-3">
                    <h1 style = "color: #8813FC;">@yield("page")</h1>
                </div>
                <div class = "row">
                    @yield("main")
                </div>
            </div>
        </div>
</div>
@endsection