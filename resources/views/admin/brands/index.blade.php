@extends('home')

@section('mainContent')
    <div class="container">
        <h2>Brands</h2>
        <a href="{{ route('brands.create') }}" class="btn btn-primary">Create Brand</a>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
            <tr>
                <th>Logo</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td style="background-color: grey"><img src="{{ asset($brand->logo_path) }}" alt="Brand Logo"
                                                            style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('brands.destroy', $brand->id) }}" method="POST"
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
