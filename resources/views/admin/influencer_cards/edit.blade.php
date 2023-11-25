@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Influencer Card</h2>

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('influencer_cards.update', $influencerCard->id) }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="heading" class="form-label">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading"
                       value="{{ $influencerCard->heading }}" required>
            </div>
            <div class="mb-3">
                <label for="subHeading" class="form-label">Sub Heading</label>
                <input type="text" class="form-control" id="subHeading" name="subHeading"
                       value="{{ $influencerCard->subHeading }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Update Influencer Card</button>
        </form>
    </div>
@endsection
