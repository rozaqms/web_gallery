@extends('navbar')

@section('navbar')
    <!-- Page section -->
    <div class="page-section gallery-single-page">
        <div class="gallery-single-warp">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-xl-6 p-0">
                        <div class="">
							<img src="{{ asset('storage/'.$post->foto) }}" class="rounded">

                            <input type="hidden" value="{{ $post->foto }}" name="oldImage">

                        </div>
                    </div>
                    <div class="col-xl-6 p-0">
                        <div class="gallery-single-text">
                            <h2>{{ $post->judul_foto }}</h2>
                            
                            <p>{!! $post->deskripsi !!}</p>

                            <a href="/gallery-single/{{ $post->id }}/edit" class="btn btn-sm btn-primary">EDIT</a>

                            <form method="POST" action="/gallery-single/{{ $post->id }}">
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


    @endsection
