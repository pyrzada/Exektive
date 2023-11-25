@extends('home')

@section('mainContent')
    <div class="container">
        <h2>Messages</h2>
        <a href="{{ route('messages.create') }}" class="btn btn-primary">Create Message</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Purpose</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->purpose }}</td>
                    <td>
                        <a href="{{ route('messages.show', $message->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
