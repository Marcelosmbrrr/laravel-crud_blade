@extends("layouts.internal")

@section("main")

<div style="width: 90vw; margin: auto;">
    <div class="input-group mb-3" style="width: 350px;">
        <input type="text" class="form-control" placeholder="By id, name or email" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-primary" type="button" id="button-addon2">Search</button>
    </div>
    <div class="shadow-sm bg-body rounded">
        <table class="w-100 table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $record)
                <tr>
                    <th scope="row">{{$record->id}}</th>
                    <td>{{$record->name}}</td>
                    <td>{{$record->email}}</td>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('user.show', $record->id) }}" role="button">Show</a>
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('user.edit', $record->id) }}" role="button">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
