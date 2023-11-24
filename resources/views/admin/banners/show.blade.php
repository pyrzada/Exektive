@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Banner Details</h2>

        <div>
            <strong>Heading:</strong> {{ $banner->heading }}
        </div>
        <div>
            <strong>Description:</strong> {{ $banner->description }}
        </div>
        <div>
            <strong>Button Text:</strong> {{ $banner->button_text }}
        </div>
        <div>
            <strong>Image:</strong>
            <img src="{{ asset($banner->image_path) }}" alt="Banner Image" style="max-width: 300px;">
        </div>

        <a href="{{ route('banners.index') }}" class="btn btn-secondary mt-3">Back to Banners</a>
    </div>
@endsection
