@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Influencer Card Details</h2>

        <div>
            <strong>Heading:</strong> {{ $influencerCard->heading }}
        </div>
        <div>
            <strong>SubHeading:</strong> {{ $influencerCard->sub_heading }}
        </div>
        <div>
            <strong>Image:</strong>
            <img src="{{ asset($influencerCard->image_path) }}" alt="InfluencerCard Image" style="max-width: 300px;">
        </div>

        <a href="{{ route('influencer_cards.index') }}" class="btn btn-secondary mt-3">Back to Influencer Cards</a>
    </div>
@endsection
