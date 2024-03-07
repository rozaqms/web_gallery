@extends('navbar')

@section('navbar')
    <!-- Page section -->
    <div class="page-section gallery-single-page">
        <div class="gallery-single-warp">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-xl-6 p-0">
                        <div class="gallery-single-slider owl-carousel">
							<img src="{{ asset('storage/'.$post->foto) }}" class="rounded">



                        </div>
                    </div>
                    <div class="col-xl-6 p-0">
                        <div class="gallery-single-text">
                            <h2>{{ $post->judul_foto }}</h2>
                            
                            <p>{!! $post->deskripsi !!}</p>

                            <a href="" class="btn btn-sm btn-primary">EDIT</a>

                            <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Page section end-->
    </div>

    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">x</div>
            <form class="search-moderl-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    @endsection
