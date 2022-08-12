@extends("layouts.internal")

@section("main")

<div class="d-flex justify-content-center align-items-center mt-5">
    <div class = "d-flex flex-column">

        <div class = "mb-2">
            <a class="btn btn-secondary" href="{{ route('dashboard') }}" role="button">Dashboard</a>
        </div>

        <div class = "d-flex shadow-sm p-3 mb-5 bg-body rounded" style="width: auto;">

            <form class = "p-3" method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                <div class="mb-3" style="width: 350px;">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value = "{{ $user->name }}" readonly>
                </div>
                <div class="mb-3" style="width: 350px;">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value = "{{ $user->email }}" readonly>
                </div>
                <div class="mb-3" style="width: 350px;">
                    <label for="verified" class="form-label">Verified</label>
                    @if (empty($user->email_verified_at))
                    <input type="text" class="form-control" id="verified" value = "Not verified">
                    @else
                    <input type="date" class="form-control" id="verified" value = "{{ $user->email_verified_at->format('Y-m-d') }}">
                    @endif
                </div>
                <div class="mb-3" style="width: 350px;">
                    <label for="created_at" class="form-label w-100 d-flex justify-content-start">Created at</label>
                    <input type="date" class="form-control" id="created_at" value = "{{ $user->created_at->format('Y-m-d') }}" readonly>
                </div>
                <div class="mb-3" style="width: 350px;">
                    <label for="updated_at" class="form-label w-100 d-flex justify-content-start">Updated at</label>
                    <input type="date" class="form-control" id="updated_at" value = "{{ $user->updated_at->format('Y-m-d') }}" readonly>
                </div>
            </form>

            <div class = "p-3" style="max-height: 400px; overflow-y: scroll;">
                @foreach ($user->posts as $index => $post)
                <div class="card mb-2" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                      <p class="card-text">{{ $post->body }}</p>
                      <a href="{{ route('post.show', $post->id) }}" class="card-link">More</a>
                    </div>
                </div>
                @endforeach
            </div>

        </div> 
    </div>
</div>  

@endsection