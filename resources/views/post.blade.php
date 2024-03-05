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
							<form class="contact-form" action="/9" method="post"> 
								<input type="file" name="foto" id="foto" placeholder="Tambahkan foto">
								<input type="text" name="judul" id="judul" placeholder="Judul foto">
								<textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi"></textarea>
                                @csrf
								<button class="site-btn">Simpan</button>
							</form>
							{{-- <div class="contac-info">
								<p>Main Str, no 23, New York</p>
								<p>+546 990221 123</p>
								<p>hosting@contact.com</p>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page section end-->
@endsection