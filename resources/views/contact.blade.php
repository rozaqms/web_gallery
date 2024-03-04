@extends('navbar')

@section('navbar')

		<!-- Page section -->
		<div class="page-section contact-page">
			<div class="contact-warp">
				<div class="row">
					<div class="col-xl-6 p-0">
						<div class="contact-text">
							<span>Say hello</span>
							<h2>Get in touch</h2>
							<form class="contact-form">
								<input type="text" placeholder="Your name">
								<input type="text" placeholder="Your email">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Message"></textarea>
								<button class="site-btn">Send message</button>
							</form>
							<div class="contac-info">
								<p>Main Str, no 23, New York</p>
								<p>+546 990221 123</p>
								<p>hosting@contact.com</p>
							</div>
						</div>
					</div>
					<div class="col-xl-6 p-0">
						<div class="map-warp"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Page section end-->
@endsection