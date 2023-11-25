@extends('home')

@section('mainContent')
    <div class="container">
        <h2>Influencer Cards</h2>

        @if(count($influencerCards)<2)
            <a href="{{ route('influencer_cards.create') }}" class="btn btn-primary">Create Influencer Card</a>
        @endif
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
            <tr>
                <th>Heading</th>
                <th>Sub Heading</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($influencerCards as $influencerCard)
                <tr>
                    <td>{{ $influencerCard->heading }}</td>
                    <td>{{$influencerCard->subHeading}}</td>
                    <td><img src="{{ asset($influencerCard->image_path) }}" alt="InfluencerCard Image"
                             style="max-width: 100px;"></td>
                    <td>
                        <a href="{{ route('influencer_cards.show', $influencerCard->id) }}"
                           class="btn btn-info">View</a>
                        <a href="{{ route('influencer_cards.edit', $influencerCard->id) }}"
                           class="btn btn-warning">Edit</a>
                        <form action="{{ route('influencer_cards.destroy', $influencerCard->id) }}" method="POST"
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
