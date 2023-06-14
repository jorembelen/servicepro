@extends('layouts.master')

@section('content')

 	<!-- breadcrumb -->
	 <div class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<ul class="breadcrumb__wrap">
						<li class="breadcrumb__item"><a href="#">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Help center</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb -->

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-5 col-lg-4 col-xl-3">
				<!-- nav -->
				<div class="sidebox">
					<h4 class="sidebox__title">Help center</h4>

					<div class="sidebox__search">
						<input type="text" class="filter__input" placeholder="Search any question">
						<button type="button">
							<i class="icon ion-ios-search"></i>
						</button>
					</div>
					<ul class="sidebox__nav">
						<li class="filter__label">Navigation:</li>

						<li><a class="active" href="#">All</a></li>
						<li><a href="#">Getting started</a></li>
						<li><a href="#">Companies</a></li>
						<li><a href="#">Freelancres</a></li>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Projects</a></li>
						<li><a href="#">Payment</a></li>
						<li><a href="#">Delete account</a></li>
					</ul>
				</div>
				<!-- end nav -->
			</div>

			<div class="col-12 col-md-7 col-lg-8 col-xl-9">
				<!-- faq -->
				<div class="faq">
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="faq__box">
								<h3>Getting started</h3>
								<ul>
									<li><a href="#">Many desktop publishing packages and web page</a></li>
									<li><a href="#">Various versions have evolved over the years</a></li>
									<li><a href="#">The point of using Lorem Ipsum</a></li>
									<li><a href="#">The generated Lorem Ipsum</a></li>
									<li><a href="#">All the Lorem Ipsum generators on the Internet</a></li>
								</ul>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="faq__box">
								<h3>Companies</h3>
								<ul>
									<li><a href="#">Many desktop publishing packages and web page</a></li>
									<li><a href="#">Various versions have evolved over the years</a></li>
									<li><a href="#">The point of using Lorem Ipsum</a></li>
									<li><a href="#">The generated Lorem Ipsum</a></li>
									<li><a href="#">All the Lorem Ipsum generators on the Internet</a></li>
								</ul>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="faq__box">
								<h3>Freelancres</h3>
								<ul>
									<li><a href="#">Many desktop publishing packages and web page</a></li>
									<li><a href="#">Various versions have evolved over the years</a></li>
									<li><a href="#">The point of using Lorem Ipsum</a></li>
									<li><a href="#">The generated Lorem Ipsum</a></li>
									<li><a href="#">All the Lorem Ipsum generators on the Internet</a></li>
								</ul>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="faq__box">
								<h3>Jobs</h3>
								<ul>
									<li><a href="#">Many desktop publishing packages and web page</a></li>
									<li><a href="#">Various versions have evolved over the years</a></li>
									<li><a href="#">The point of using Lorem Ipsum</a></li>
									<li><a href="#">The generated Lorem Ipsum</a></li>
									<li><a href="#">All the Lorem Ipsum generators on the Internet</a></li>
								</ul>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="faq__box">
								<h3>Projects</h3>
								<ul>
									<li><a href="#">Many desktop publishing packages and web page</a></li>
									<li><a href="#">Various versions have evolved over the years</a></li>
									<li><a href="#">The point of using Lorem Ipsum</a></li>
									<li><a href="#">The generated Lorem Ipsum</a></li>
									<li><a href="#">All the Lorem Ipsum generators on the Internet</a></li>
								</ul>
							</div>
						</div>

						<div class="col-12 col-xl-6">
							<div class="faq__box">
								<h3>Payment</h3>
								<ul>
									<li><a href="#">Many desktop publishing packages and web page</a></li>
									<li><a href="#">Various versions have evolved over the years</a></li>
									<li><a href="#">The point of using Lorem Ipsum</a></li>
									<li><a href="#">The generated Lorem Ipsum</a></li>
									<li><a href="#">All the Lorem Ipsum generators on the Internet</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- end faq -->
			</div>
		</div>
	</div>
    
@endsection