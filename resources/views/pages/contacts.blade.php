@extends('layouts.master')

@section('content')

		<!-- breadcrumb -->
		<div class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="breadcrumb__wrap">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Contacts</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb -->

		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7 col-xl-8">
					<!-- form -->
					<form action="#" class="form">
						<h2 class="form__title">Contact form</h2>
						<div class="form__group">
							<label for="name" class="form__label">Name:</label>
							<input type="text" name="name" id="name" class="form__input">
						</div>
						<div class="form__group">
							<label for="email" class="form__label">Email:</label>
							<input type="text" name="email" id="email" class="form__input">
						</div>
						<div class="form__group">
							<label for="subject" class="form__label">Subject:</label>
							<input type="text" name="subject" id="subject" class="form__input">
						</div>
						<div class="form__group">
							<label for="text" class="form__label">Message:</label>
							<textarea name="text" id="text" class="form__textarea"></textarea>
						</div>
						<button type="button" class="form__btn"><span>Send</span></button>
					</form>
					<!-- end form -->
				</div>

				<div class="col-12 col-md-5 col-xl-4">
					<!-- contacts -->
					<div class="contacts">
						<h2 class="contacts__title">Contact information</h2>

						<p class="contacts__text">It is a long fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>

						<ul class="contacts__list">
							<li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
							<li><a href="mailto:support@workland.com">support@workland.com</a></li>
						</ul>
						<ul class="contacts__social">
							<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
							<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
							<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
							<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
						</ul>
					</div>
					<!-- end contacts -->
				</div>
			</div>
		</div>
    
@endsection