@extends('navbar')

@section('navbar')
    <!-- Page section -->
    <div class="page-section contact-page">
        <div class="contact-warp">
            <div class="row">
                <div class="col-xl-6 p-0">
                    <div class="contact-text">
                        {{-- @foreach ($user as $user) --}}
                        <h2>Profil</h2>
                        <form class="contact-form">
                            <h4> User Name: {{ $user->name }}</h4>
                            <h4> Name : {{ $user->real }}</h4>
                            <h4> Email : {{ $user->email }}</h4>
                        </form>
                        {{-- @endforeach --}}
                        <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page section end-->
@endsection
