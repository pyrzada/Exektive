@extends('home')

@section('mainContent')

    <div class="container">
        <h2>Banners</h2>
        <a href="{{ route('banners.create') }}" class="btn btn-primary">Create Banner</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
            <tr>
                <th>Heading</th>
                <th>Description</th>
                <th>Button Text</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->heading }}</td>
                    <td>{{ $banner->description }}</td>
                    <td>{{ $banner->button_text }}</td>
                    <td><img src="{{ asset($banner->image_path) }}" alt="Banner Image" style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('banners.show', $banner->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST"
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
