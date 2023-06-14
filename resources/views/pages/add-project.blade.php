@extends('layouts.master')

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap">
                        <li class="breadcrumb__item"><a href="#">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Post a project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                <!-- form -->
                <form action="#" class="form">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="form__title">New project</h2>
                        </div>

                        <div class="col-12">
                            <div class="form__group">
                                <label for="name" class="form__label">Project name:</label>
                                <input name="name" type="text" id="name" class="form__input" placeholder="Type name">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__group">
                                <label for="description" class="form__label">Description:</label>
                                <textarea name="description" id="description" class="form__textarea" placeholder="Type description"></textarea>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">
                            <div class="form__group">
                                <label for="category" class="form__label">Category:</label>
                                <div class="form__select-wrap">
                                    <select name="category" id="category" class="form__select">
                                        <option value="0">Category 1</option>
                                        <option value="1">Category 2</option>
                                        <option value="2">Category 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-6">
                            <div class="form__group">
                                <label for="level" class="form__label">Experience level:</label>
                                <div class="form__select-wrap">
                                    <select name="level" id="level" class="form__select">
                                        <option value="0">Level 1</option>
                                        <option value="1">Level 2</option>
                                        <option value="2">Level 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__group">
                                <label for="budget" class="form__label">Budget:</label>
                                <div class="form__select-wrap">
                                    <select name="budget" id="budget" class="form__select">
                                        <option value="0">Fixed price</option>
                                        <option value="0">Hourly price</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Min">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Max">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__group">
                                <label for="location" class="form__label">Location:</label>
                                <input name="location" id="location" type="text" class="form__input" placeholder="Type address">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form__group">
                                <label for="skills" class="form__label">Skills:</label>
                                <select class="js-example-basic-multiple" name="skills" id="skills" multiple="multiple">
                                    <option value="vue">Vue Js</option>
                                    <option value="react">React Js</option>
                                    <option value="css">CSS</option>
                                    <option value="html">HTML</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="form__btn" type="button"><span>Post a project</span></button>
                        </div>
                    </div>
                </form>
                <!-- end form -->
            </div>

            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- sidebox -->
                <div class="sidebox sidebox--desk">
                    <h4 class="sidebox__title">FAQ</h4>
                    <div class="sidebox__content">
                        <div class="sidebox__faq">
                            <h5>Is there a fee to post a project?</h5>
                            <p>There are pricing plans monthly and yearly for project on Workland. It is a paid service that we offer bith for the employer and the freelancer.</p>
                        </div>
                        <div class="sidebox__faq">
                            <h5>How do I find freelancers for my project?</h5>
                            <p>Posting a project on Workland will get your project in front of the most qualified freelancers and agencies by bids. You will then get bids for the project with the applicant’s details and reasons why they are the best fit for the projects. You can also search for freelancers and invite them to apply.</p>
                        </div>
                        <div class="sidebox__faq">
                            <h5>How do I pay freelancers & agencies?</h5>
                            <p>You’re free to pay your freelancer and agencies. you can pay automatically for their work through Paypal, Payoneer, or (which allows you to pay via credit card, debit card).</p>
                        </div>
                    </div>
                    <a href="#" class="sidebox__more">View more</a>
                </div>
                <!-- end sidebox -->
            </div>
        </div>
    </div>

 
    
@endsection