@extends('layouts.master')

@section('content')

		<!-- breadcrumb -->
		<div class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="breadcrumb__wrap">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item"><a href="#">Jobs</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Senior Wordpress Developer</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb -->

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 col-lg-8 col-xl-9">
					<!-- post -->
					<div class="post">
						<div class="post__head">
							<a href="#" class="post__head-img">
								<img src="/assets/img/user9.jpg" alt="">
							</a>
							<div class="post__head-title">
								<h5><a href="#">Sebastian Lee</a></h5>
								<p>12 min ago</p>
							</div>

							<div class="post__dropdown">
								<a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon ion-md-more"></i>
								</a>

								<ul class="dropdown-menu dropdown-menu-right post__dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
									<li><a href="#">Hide</a></li>
								</ul>
							</div>
						</div>

						<div class="post__wrap">
							<div class="post__company">
								<i class="icon ion-ios-briefcase"></i>
								<span>Envato</span>
							</div>

							<div class="post__location">
								<i class="icon ion-ios-navigate"></i>
								<span>Australia</span>
							</div>

							<div class="post__actions">
								<a class="post__actions-btn post__actions-btn--green" href="#">
									<i class="icon ion-ios-bookmark"></i>
								</a>
								<a class="post__actions-btn post__actions-btn--red" href="#">
									<i class="icon ion-ios-mail"></i>
								</a>
							</div>
						</div>

						<h2 class="post__title">Senior Front-end Developer</h2>

						<div class="post__options">
							<span>Full time</span>
							<p>$36/hr</p>
						</div>

						<div class="post__description">
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

							<ul>
								<li>Work experience from 3 years</li>
								<li>Full Time</li>
								<li>Working hours from 9:00 to 18:00</li>
							</ul>
						</div>

						<div class="post__tags">
							<a href="#">HTML</a>
							<a href="#">CSS</a>
							<a href="#">Js</a>
						</div>

						<a href="#" class="post__apply"><span>Apply now</span></a>

						<div class="post__stats">
							<div>
								<a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>15</span></a>
								<a class="post__comments" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1"><i class="icon ion-ios-text"></i> <span>0</span></a>
							</div>

							<div class="post__views">
								<i class="icon ion-ios-eye"></i> <span>214</span>
							</div>
						</div>

						<div class="collapse post__collapse" id="collapse1">
							<form action="#" class="post__form">
								<input type="text" placeholder="Type your comment...">
								<button type="button"><i class="icon ion-ios-paper-plane"></i></button>
							</form>
						</div>
					</div>
					<!-- end post -->

					<h3 class="main__title">Similar Jobs</h3>

					<div class="row">
						<div class="col-12 col-xl-6">
							<!-- post -->
							<div class="post post--clear">
								<div class="post__head">
									<a href="#" class="post__head-img">
										<img src="/assets/img/user5.jpg" alt="">
									</a>
									<div class="post__head-title">
										<h5><a href="#">John Doe</a></h5>
										<p>15 min ago</p>
									</div>

									<div class="post__dropdown">
										<a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon ion-md-more"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right post__dropdown-menu" aria-labelledby="dropdownMenu3">
											<li><a href="#">Edit</a></li>
											<li><a href="#">Delete</a></li>
											<li><a href="#">Hide</a></li>
										</ul>
									</div>
								</div>

								<div class="post__wrap">
									<div class="post__company">
										<i class="icon ion-ios-briefcase"></i>
										<span>Envato</span>
									</div>

									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Australia</span>
									</div>

									<div class="post__actions">
										<a class="post__actions-btn post__actions-btn--green" href="#">
											<i class="icon ion-ios-bookmark"></i>
										</a>
										<a class="post__actions-btn post__actions-btn--red" href="#">
											<i class="icon ion-ios-mail"></i>
										</a>
									</div>
								</div>

								<h2 class="post__title"><a href="job.html">Wordpress Developer</a></h2>

								<div class="post__options">
									<span>Full time</span>
									<p>$22/hr</p>
								</div>

								<div class="post__description">
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
								</div>

								<div class="post__tags">
									<a href="#">HTML</a>
									<a href="#">CSS</a>
									<a href="#">PHP</a>
									<a href="#">Wordpress</a>
								</div>
							</div>
							<!-- end post -->
						</div>

						<div class="col-12 col-xl-6">
							<!-- post -->
							<div class="post post--clear">
								<div class="post__head">
									<a href="#" class="post__head-img">
										<img src="/assets/img/user1.jpg" alt="">
									</a>
									<div class="post__head-title">
										<h5><a href="#">Lee</a></h5>
										<p>11 min ago</p>
									</div>

									<div class="post__dropdown">
										<a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="icon ion-md-more"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right post__dropdown-menu" aria-labelledby="dropdownMenu4">
											<li><a href="#">Edit</a></li>
											<li><a href="#">Delete</a></li>
											<li><a href="#">Hide</a></li>
										</ul>
									</div>
								</div>

								<div class="post__wrap">
									<div class="post__company">
										<i class="icon ion-ios-briefcase"></i>
										<span>Envato</span>
									</div>

									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Vietnam</span>
									</div>

									<div class="post__actions">
										<a class="post__actions-btn post__actions-btn--green" href="#">
											<i class="icon ion-ios-bookmark"></i>
										</a>
										<a class="post__actions-btn post__actions-btn--red" href="#">
											<i class="icon ion-ios-mail"></i>
										</a>
									</div>
								</div>

								<h2 class="post__title"><a href="job.html">Laravel Developer</a></h2>

								<div class="post__options">
									<span>Full time</span>
									<p>$36/hr</p>
								</div>

								<div class="post__description">
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
								</div>

								<div class="post__tags">
									<a href="#">HTML</a>
									<a href="#">CSS</a>
									<a href="#">PHP</a>
									<a href="#">Laravel</a>
								</div>
							</div>
							<!-- end post -->
						</div>
					</div>
				</div>

				<div class="col-12 col-md-5 col-lg-4 col-xl-3">
					<!-- sidebox -->
					<div class="sidebox">
						<h4 class="sidebox__title">Job summary</h4>
						<ul class="sidebox__list">
							<li><span>Salary:</span> <span>$36/hr</span></li>
							<li><span>Employment status:</span> <span>Full time</span></li>
							<li><span>Experience:</span> <span>2 to 3 year(s)</span></li>
							<li><span>Location:</span> <span>Australia</span></li>
							<li><span>Company:</span> <span>Envato</span></li>
							<li><span>Published on:</span> <span>Feb 25, 2020</span></li>
						</ul>
					</div>
					<!-- end sidebox -->

					<!-- apply btn -->
					<div class="sidebox">
						<div class="sidebox__apply">
							<button class="filter__btn" type="button"><span>Apply now</span></button>
						</div>
					</div>
					<!-- end apply btn -->

					<!-- share -->
					<div class="sidebox">
						<div class="sidebox__share">
							<span>Share:</span>
							<ul>
								<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
								<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end share -->
				</div>
			</div>
		</div>

 
    
@endsection