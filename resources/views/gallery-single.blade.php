@extends('navbar')

@section('navbar')

		<!-- Page section -->
		<div class="page-section gallery-single-page">
			<div class="gallery-single-warp">
				<div class="row">
					<div class="col-xl-6 p-0">
						@foreach ($post as $u)

						<div class="gallery-single-slider owl-carousel">
							<img src="/storage/post-image.$u->foto }}">
						
							
						</div>
						@endforeach	
					</div>
					<div class="col-xl-6 p-0">
						<div class="gallery-single-text">
							<span>Photography</span>
							<h2>Puppy Eyes</h2>
							<ul>
								<li><span>Client:</span>Company Name</li>
								<li><span>Date:</span>August 25, 2018</li>
								<li><span>Categorie:</span>Animal Photography</li>
								<li><span>Tags:</span>animals, dogs, photography</li>
							</ul>
							<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesua-da fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.</p>
							<p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesua-da fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.</p>
						</div>
					</div>
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