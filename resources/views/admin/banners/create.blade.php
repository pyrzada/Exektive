@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Banner</h2>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="button_text" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="button_text" name="button_text" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Banner</button>
        </form>
    </div>
@endsection
