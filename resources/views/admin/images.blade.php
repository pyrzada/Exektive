@extends('home')

@section('mainContent')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3">
            <div class="card-header">{{ __('Images') }}</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {{ __('Images!') }}
            </div>
        </div>
    </main>
@endsection
