@extends('navbar')

@section('navbar')

		<!-- Page section -->
		<div class="page-section gallery-page">
			<ul class="portfolio-filter">
				<li class="filter all active" data-filter="*">All</li>
				<li class="filter" data-filter=".photo">Photography</li>
				<li class="filter" data-filter=".nature">Nature</li>
				<li class="filter" data-filter=".love">Love</li>
				<li class="filter" data-filter=".animals">Animals</li>
			</ul>
			<div class="portfolio-gallery">
				@foreach ($posts as $post)
				<div class="gallery-item animals">
					<img src="{{ asset('storage/'.$post->foto) }}" class="rounded">
					<div class="hover-links">
						<a href="" class="site-btn sb-light">Next</a>
					</div>
				</div>
				@endforeach
				
			</div>

		</div>
		<!-- Page section end-->
@endsection