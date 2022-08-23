@extends("layouts.internal")

@section("page", "Posts")

@section("main")

<div>
    <div class = "d-flex mb-3">
        <form method = "GET" action = "{{ route('dashboard-panel') }}">
            <div class="input-group" style="width: 350px;">
                @csrf
                <input name="search" type="text" class="form-control" placeholder="By title, body or footer">
                <button class="btn btn-primary mr-5" type="submit">Search</button>
            </div>
        </form>
        <div style="margin-left: 10px;">
            <a class="btn btn-success" href="{{ route('dashboard-panel') }}" role="button">Refresh</a>
        </div>
    </div>
    <div class="shadow-sm bg-body rounded">
        @if (count($posts) > 0)
        <table class="w-100 table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Footer</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $index => $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->title}}</td>
                    <td>{{$record->body}}</td>
                    <td>{{$record->footer}}</td>
                    <td>{{$record->users->name}}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('post.show', $record->id) }}" role="button">Show</a>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('post.edit', $record->id) }}" role="button">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <div class="alert alert-danger" role="alert">
        No user records found.
        </div>
        @endif
    </div>
</div>

@endsection
