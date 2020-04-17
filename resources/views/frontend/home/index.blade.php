@extends('frontend.template.master')

@section('content')
<!-- Jumbotron -->
<section id="jumbotron">
	<div class="jumbotron home-jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="jumbotron-title">
						<h6 class="text-white">WELCOME TO LINECODE</h6>
						<h1 class="text-white">Kembangkan Bisnis Anda Melalui Website</h1>
						<!--
							<h4 class="d-inline text-white">LINECODE IS </h4> <h4 class="d-inline text-white" id="typed"></h4>
						-->
					</div>
				</div>
				<div class="col-lg-6">
					<img src="{{ asset('lib/images/jumbotron/startup.svg') }}" class="img-fluid">
				</div>
			</div>
		</div>
		<img src="{{ asset('lib/images/jumbotron/wave.svg') }}">
	</div>
</section>
<!-- End Jumbotron -->

<!-- About -->
<section class="pb-5" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 px-5 px-lg-0 pr-lg-5">
				<div class="monitor">
					<img src="{{ asset('lib/images/about/monitor.png') }}" class="about-img-1 img-fluid">
					<img src="{{ asset('lib/images/about/website.png') }}" class="about-img-2 img-fluid">
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="text-center text-lg-left my-4 my-lg-0 mb-lg-3 text-primary bold">Kenapa Harus Memiliki Website ?</h2>
				<p class="justify">Hari gini gak punya website? Mungkin begitulah reaksi yang didapatkan oleh seorang pebisnis saat ditanya website bisnisnya, dan sayangnya memang belum memiliki website. Atau, jangan-jangan Anda juga sudah pernah mendapatkan reaksi seperti itu? Namun, sebenarnya ungkapan itu wajar kok, mengingat kita hidup di zaman serba digital. Rasanya, memiliki sebuah website adalah sebuah keharusan bagi sebuah bisnis.<br><br>Kami hadir untuk anda yang ingin memiliki website pribadi tanpa harus memikirkan design, domain, hosting dan perawatan website. Semua ada dalam paket yang telah kami sediakan.</p>
			</div>
		</div>
	</div>
</section>
<!-- End About -->

<!-- Preparation -->
<section class="bg-light py-5" id="project">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center text-primary bold mb-5">Yang Perlu Anda Persiapkan</h1>
			</div>
		</div>
		<div class="row text-center mb-4">
			<div class="col-lg-4 px-5">
				<h4 class="mb-4">Materi Website</h4>
				<img src="{{ asset('lib/images/web-preparation/content.svg') }}" class="prepare-img-1 img-fluid" alt="Prepare Image 1">
			</div>
			<div class="col-lg-4 px-5">
				<h4 class="mb-4">Brosur / Materi Lainnya</h4>
				<img src="{{ asset('lib/images/web-preparation/more-content.svg') }}" class="prepare-img-2 img-fluid" alt="Prepare Image 2">
			</div>
			<div class="col-lg-4 px-5">
				<h4 class="mb-4">Tidak Punya Materi ?</h4>
				<img src="{{ asset('lib/images/web-preparation/no-content.svg') }}" class="prepare-img-3 img-fluid" alt="Prepare Image 3">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<p>Kirimkan konten / materi website yang telah disusun kepada tim kami. Website Anda akan online dalam waktu yang telah ditentukan.</p>
			</div>
			<div class="col-lg-4">
				<p>Tim kami akan bantu aplikasikan konten dari brosur / materi lain yang telah Anda miliki ke dalam website.</p>
			</div>
			<div class="col-lg-4">
				<p>Anda tidak memiliki materi? Jangan khawatir, tim kami juga dapat membantu menulis konten untuk website yang akan dibuat.</p>
			</div>
		</div>
	</div>
</section>
<!-- End Preparation -->

<!-- Starting -->
<section class="py-5" id="starting">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="text-white">Order Website</h2>
				<a href="#!" class="btn btn-white rounded-pill px-4 py-2">Order Now <i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</section>
<!-- End Starting -->

<!-- Blog -->
<section class="py-5" id="blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="text-center text-primary mb-5 bold">Blog</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card-deck m-b-30">
					<div class="carousel-wrap">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="card shadow">
									<img class="card-img-top" src="assets/images/ui-cards/ui-cards-13.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title font-18">Card title</h5>
										<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card shadow">
									<img class="card-img-top" src="assets/images/ui-cards/ui-cards-13.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title font-18">Card title</h5>
										<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card shadow">
									<img class="card-img-top" src="assets/images/ui-cards/ui-cards-13.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title font-18">Card title</h5>
										<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="card shadow">
									<img class="card-img-top" src="assets/images/ui-cards/ui-cards-13.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title font-18">Card title</h5>
										<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
									</div>
								</div>
							</div>
						</div>                                    
					</div>                                    
				</div>                                    
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-center">
				<button type="button" class="btn btn-rounded px-5 py-2 btn-primary shadow bold">See More <i class="fa fa-arrow-right"></i></button>
			</div>
		</div>
	</div>
</section>
<!-- End Blog -->

<!-- Contact -->
<section class="bg-light py-5" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolor provident ut, hic porro tenetur quos tempore ullam harum ea aspernatur, quidem saepe. Numquam sed dolore ut dignissimos! Totam, minima?
			</div>
			<div class="col-lg-6">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa autem, maiores fugiat magni, fuga corrupti iste numquam nulla suscipit id inventore. Delectus, odit, voluptatum! Perspiciatis debitis, voluptatem vitae obcaecati perferendis.
			</div>
		</div>
	</div>
</section>
<!-- End Contact -->
@stop