@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Brand Details</h2>

        <div>
            <strong>Logo:</strong>
            <img src="{{ asset($brand->logo_path) }}" alt="Brand Logo" style="max-width: 300px;">
        </div>

        <a href="{{ route('brands.index') }}" class="btn btn-secondary mt-3">Back to Brands</a>
    </div>
@endsection
