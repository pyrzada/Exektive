@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">
                                {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('banners.index') }}">
                                {{ __('Banner') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('images.index') }}">
                                {{ __('Images') }}
                            </a>
                        </li>
                        <!-- Add more menu items as needed -->
                    </ul>
                </div>
            </nav>
            @yield('mainContent')
        </div>
    </div>
@endsection
