@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Influencer Card</h2>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('influencer_cards.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
            </div>
            <div class="mb-3">
                <label for="subHeading" class="form-label">Sub Heading</label>
                <input type="text" class="form-control" id="subHeading" name="subHeading"
                       required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Influencer Card</button>
        </form>
    </div>
@endsection
