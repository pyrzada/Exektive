@extends('home')

@section('mainContent')
    <div class="container">
        <h2>Who We Are</h2>
        @if(count($whoWeAres)<1)
            <a href="{{ route('who_we_ares.create') }}" class="btn btn-primary">Create WhoWeAre</a>
        @endif
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
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($whoWeAres as $whoWeAre)
                <tr>
                    <td>{{ $whoWeAre->heading }}</td>
                    <td>{{ $whoWeAre->description }}</td>
                    <td><img src="{{ asset($whoWeAre->image_path) }}" alt="WhoWeAre Image"
                             style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('who_we_ares.show', $whoWeAre->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('who_we_ares.edit', $whoWeAre->id) }}"
                           class="btn btn-warning">Edit</a>
                        <form action="{{ route('who_we_ares.destroy', $whoWeAre->id) }}" method="POST"
                              style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">
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
