@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Contact Us Entry Details</h2>
        <div>
            <strong>Description:</strong> {{ $contactUs->description }}
        </div>
        <div>
            <strong>Image:</strong>
            <img src="{{ asset($contactUs->image_path) }}" alt="Contact Us Image" style="max-width: 300px;">
        </div>
        <div>
            <strong>Banner Image:</strong>
            <img src="{{ asset($contactUs->banner_image_path) }}" alt="Contact Us Banner Image"
                 style="max-width: 300px;">
        </div>

        <a href="{{ route('contactuses.index') }}" class="btn btn-secondary mt-3">Back to Contact Us Entries</a>
    </div>
@endsection
