@extends("layouts.internal")

@section("page", "Users")

@section("main")

<div>
    <div class = "d-flex mb-3">
        <form method = "GET" action = "{{ route('dashboard-panel') }}">
            <div class="input-group" style="width: 350px;">
                @csrf
                <input name="search" type="text" class="form-control" placeholder="By id, name or email">
                <button class="btn btn-primary mr-5" type="submit">Search</button>
            </div>
        </form>
        <div style="margin-left: 10px;">
            <a class="btn btn-success" href="{{ route('dashboard-panel') }}" role="button">Refresh</a>
        </div>
    </div>
    <div class="shadow-sm bg-body rounded">
        @if (count($users) > 0)
        <table class="w-100 table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Posts</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>
                        <img src="{{ url($record->image) }}" class="rounded-circle mx-auto d-block" alt={{ "{$record->name} image"}} width="40px" height="40px">
                    </td>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>{{count($record->posts)}}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('user.show', $record->id) }}" role="button">Show</a>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('user.edit', $record->id) }}" role="button">Edit</a>
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
