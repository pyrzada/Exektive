@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Who We Are Details</h2>

        <div>
            <strong>Heading:</strong> {{ $whoWeAre->heading }}
        </div>
        <div>
            <strong>Description:</strong> {{ $whoWeAre->description }}
        </div>
        <div>
            <strong>Image:</strong>
            <img src="{{ asset($whoWeAre->image_path) }}" alt="WhoWeAre Image" style="max-width: 300px;">
        </div>

        <a href="{{ route('who_we_ares.index') }}" class="btn btn-secondary mt-3">Back to Who We Are</a>
    </div>
@endsection
