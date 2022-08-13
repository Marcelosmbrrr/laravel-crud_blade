@extends("layouts.internal")

@section("main")

<div style="width: 90vw; margin: auto;">
    <div class = "d-flex mb-3">
        <form method = "GET" action = "{{ route('dashboard') }}">
            <div class="input-group" style="width: 350px;">
                @csrf
                <input name="search" type="text" class="form-control" placeholder="By id, name or email">
                <button class="btn btn-primary mr-5" type="submit">Search</button>
            </div>
        </form>
        <div style="margin-left: 10px;">
            <a class="btn btn-success" href="{{ route('dashboard') }}" role="button">Refresh</a>
        </div>
    </div>
    <div class="shadow-sm bg-body rounded">
        @if (count($users) > 0)
        <table class="w-100 table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
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
