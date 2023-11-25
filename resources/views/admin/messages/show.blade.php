@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Message Details</h2>

        <div>
            <strong>Name:</strong> {{ $message->name }}
        </div>
        <div>
            <strong>Email:</strong> {{ $message->email }}
        </div>
        <div>
            <strong>Purpose:</strong> {{ $message->purpose }}
        </div>

        <a href="{{ route('messages.index') }}" class="btn btn-secondary mt-3">Back to Messages</a>
    </div>
@endsection
