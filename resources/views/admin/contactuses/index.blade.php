@extends('home')

@section('mainContent')
    <div class="container">
        <h2>Contact Us Entries</h2>
        @if(count($contactUses)<1)
            <a href="{{ route('contactuses.create') }}" class="btn btn-primary">Add Contact Us Entry</a>
        @endif
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
            <tr>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contactUses as $contactUs)
                <tr>
                    <td>{{ $contactUs->description }}</td>
                    <td><img src="{{ asset($contactUs->image_path) }}" alt="Contact Us Image" style="max-width: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('contactuses.show', $contactUs->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('contactuses.edit', $contactUs->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contactuses.destroy', $contactUs->id) }}" method="POST"
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
