@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Brand</h2>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Brand</button>
        </form>
    </div>
@endsection
