@extends('navbar')

@section('navbar')

		<!-- Page section -->
		<div class="page-section gallery-page">
			
			<div class="portfolio-gallery">
				@foreach ($posts as $post)
				<div class="gallery-item animals">
					<img src="{{ asset('storage/'.$post->foto) }}" class="rounded">
					<div class="hover-links">
						<a href="/show/{{ $post->id }}" class="site-btn sb-light">View</a>
					</div>
				</div>
				@endforeach
				
			</div>

		</div>
		<!-- Page section end-->
@endsection