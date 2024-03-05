@extends('navbar')

@section('navbar')
    <!-- Page section -->
    <div class="page-section contact-page">
        <div class="contact-warp">
            <div class="row">
                <div class="col-xl-6 p-0">
                    <div class="contact-text">
                        <h2>Profil</h2>
                        <form class="contact-form">
                            <input type="text" placeholder="Your name">
                            <input type="text" placeholder="Your email">
                            <input type="text" placeholder="Subject">
                            <textarea placeholder="Message"></textarea>
                        </form>
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
