@extends('layouts.master')

@section('content')

		<!-- breadcrumb -->
		<div class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="breadcrumb__wrap">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Companies</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb -->

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-5 col-lg-4 col-xl-3">
					<!-- filter -->
					<div class="sidebox">
						<h4 class="sidebox__title">Filters <button type="button">Clear all</button></h4>

						<div class="filter">
							<div class="filter__group">
								<label class="filter__label">Keyword:</label>
								<input type="text" class="filter__input" placeholder="Keyword">
							</div>

							<div class="filter__group">
								<label for="skills2" class="filter__label">Skills:</label>

								<div class="filter__select-wrap">
									<select name="skills2" id="skills2" class="filter__select">
										<option>Vue Js</option>
										<option>Laravel</option>
										<option>PHP</option>
										<option>Java</option>
										<option>React</option>
										<option>Angular</option>
										<option>CSS</option>
										<option>Java Script</option>
									</select>
								</div>
							</div>

							<div class="filter__group">
								<label for="categoty" class="filter__label">Category:</label>

								<div class="filter__select-wrap">
									<select name="categoty" id="categoty" class="filter__select">
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
										<option>Category 4</option>
										<option>Category 5</option>
										<option>Category 6</option>
										<option>Category 7</option>
										<option>Category 8</option>
										<option>Category 9</option>
										<option>Category 10</option>
									</select>
								</div>
							</div>

							<div class="filter__group">
								<label for="series" class="filter__label">Series ( A to Z):</label>

								<div class="filter__select-wrap">
									<select name="series" id="series" class="filter__select">
										<option>Select Alphabet</option>
										<option>A</option>
										<option>B</option>
										<option>C</option>
										<option>D</option>
										<option>E</option>
										<option>F</option>
										<option>G</option>
										<option>H</option>
										<option>I</option>
										<option>J</option>
										<option>K</option>
										<option>L</option>
										<option>M</option>
										<option>N</option>
										<option>O</option>
										<option>P</option>
										<option>Q</option>
										<option>R</option>
										<option>S</option>
										<option>T</option>
										<option>U</option>
										<option>V</option>
										<option>W</option>
										<option>X</option>
										<option>Y</option>
										<option>Z</option>
									</select>
								</div>
							</div>

							<div class="filter__group filter__group--last">
								<label class="filter__label">Location:</label>
								<input type="text" class="filter__input" placeholder="Location">
							</div>

							<div class="filter__group">
								<button class="filter__btn" type="button"><span>Search</span></button>
							</div>
						</div>
					</div>
					<!-- end filter -->
				</div>

				<div class="col-12 col-md-7 col-lg-8 col-xl-9">
					<div class="row">
						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Envato</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Themeforest</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Codecanyon</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Poland</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Videohive</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Czech</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Audiojungle</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>USA</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Graphicriver</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Germany</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Photodune</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Canada</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">3docean</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Ukraine</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Envato</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Russia</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Themeforest</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Israel</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Codecanyon</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Tunisia</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Videohive</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>USA</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Themeforest</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Holland</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Codecanyon</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>USA</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- company -->
						<div class="col-12 col-sm-6 col-md-12 col-lg-4">
							<div class="company">
								<div class="company__logo">
									<img src="/assets/img/company.svg" alt="">
								</div>
								
								<div class="company__wrap">
									<h2 class="company__title"><a href="#">Videohive</a></h2>
									
									<p class="company__text">Digital services</p>
								</div>

								<div class="company__actions">
									<div class="post__location">
										<i class="icon ion-ios-navigate"></i>
										<span>Russia</span>
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
							</div>
						</div>
						<!-- end company -->

						<!-- view more -->
						<div class="col-12">
							<button class="main__btn main__btn--margin" type="button"><span>load more</span></button>
						</div>
						<!-- end view more -->
					</div>
				</div>
			</div>
		</div>
 
    
@endsection