@extends('navbar')

@section('navbar')

		<!-- Page section -->
		<div class="page-section contact-page">
			<div class="contact-warp">
				<div class="row">
					<div class="col-xl-6 p-0">
						<div class="contact-text">
							<span>Ayo</span>
							<h2>Tambahkan Aktifitas</h2>  
						  
							<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
								@method('PUT')

								{{-- <input type="file" name="foto" id="foto" placeholder="Tambahkan foto"> --}}
								<label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('judul_foto') is-invalid @enderror" name="juful_foto" value="{{ old('judul_foto', $post->judul_foto) }}" placeholder="Masukkan Judul foto">
                            
								<label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan Konten Post">{{ old('deskripsi', $post->deskripsi) }}</textarea>
                            
								<button class="site-btn" type="submit">Simpan</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page section end-->
@endsection