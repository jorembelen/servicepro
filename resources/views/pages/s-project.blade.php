@extends('layouts.master')

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap">
                        <li class="breadcrumb__item"><a href="#">Home</a></li>
                        <li class="breadcrumb__item"><a href="#">Projects</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">PSD to HTML</li>
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
                            <img src="/assets/img/user2.jpg" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="#">Andy Ramos</a></h5>
                            <p>11 min ago</p>
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
                            <span>Front-end Developer</span>
                        </div>

                        <div class="post__actions">
                            <a class="post__actions-btn post__actions-btn--green" href="#">
                                <i class="icon ion-ios-bookmark"></i>
                            </a>
                            <a class="post__actions-btn post__actions-btn--red" href="#">
                                <i class="icon ion-ios-mail"></i>
                            </a>
                            <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Bid now</span></a>
                        </div>
                    </div>

                    <h2 class="post__title">PSD to HTML</h2>

                    <div class="post__options">
                        <p>$300 - $350</p>
                    </div>

                    <div class="post__description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

                        <ul>
                            <li>Envato</li>
                            <li>Themeforest</li>
                            <li>Codecanyon</li>
                            <li>Videohive</li>
                            <li>Audiojungle</li>
                        </ul>

                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>

                    <div class="post__tags">
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">JS</a>
                        <a href="#">PSD</a>
                    </div>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>15</span></a>
                            <a class="post__comments" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3"><i class="icon ion-ios-text"></i> <span>0</span></a>
                        </div>

                        <div class="post__views">
                            <i class="icon ion-ios-eye"></i> <span>214</span>
                        </div>
                    </div>

                    <div class="collapse post__collapse" id="collapse3">
                        <form action="#" class="post__form">
                            <input type="text" placeholder="Type your comment...">
                            <button type="button"><i class="icon ion-ios-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <!-- end post -->

                <h3 class="main__title">Freelancers Bidding</h3>

                <!-- bid -->
                <div class="bid">
                    <div class="bid__head">
                        <a href="#" class="bid__head-img">
                            <img src="/assets/img/user1.jpg" alt="">
                        </a>
                        <div class="bid__head-title">
                            <h5><a href="#">Tony Young</a></h5>
                            <p>
                                <i class="icon ion-ios-navigate"></i>
                                <span>USA</span>
                            </p>
                        </div>
                    </div>

                    <div class="bid__price">
                        <span>$300 – $350</span>
                        <p>in 8 days</p>
                    </div>
                </div>
                <!-- end bid -->

                <!-- bid -->
                <div class="bid">
                    <div class="bid__head">
                        <a href="#" class="bid__head-img">
                            <img src="/assets/img/user5.jpg" alt="">
                        </a>
                        <div class="bid__head-title">
                            <h5><a href="#">John Doe</a></h5>
                            <p>
                                <i class="icon ion-ios-navigate"></i>
                                <span>Vietnam</span>
                            </p>
                        </div>
                    </div>

                    <div class="bid__price">
                        <span>$300 – $300</span>
                        <p>in 10 days</p>
                    </div>
                </div>
                <!-- end bid -->

                <!-- bid -->
                <div class="bid">
                    <div class="bid__head">
                        <a href="#" class="bid__head-img">
                            <img src="/assets/img/user6.jpg" alt="">
                        </a>
                        <div class="bid__head-title">
                            <h5><a href="#">Marsha Baldwin</a></h5>
                            <p>
                                <i class="icon ion-ios-navigate"></i>
                                <span>Poland</span>
                            </p>
                        </div>
                    </div>

                    <div class="bid__price">
                        <span>$280 – $330</span>
                        <p>in 11 days</p>
                    </div>
                </div>
                <!-- end bid -->
            </div>

            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- filter -->
                <div class="sidebox">
                    <h4 class="sidebox__title">Bid now this job <button type="button">Clear all</button></h4>

                    <div class="filter">
                        <div class="filter__group">
                            <label class="filter__label">Set Your Minimal Rate ($):</label>

                            <div class="filter__range">
                                <div id="filter__range-start"></div>
                                <div id="filter__range-end"></div>
                            </div>

                            <div id="filter__range"></div>
                        </div>

                        <div class="filter__group">
                            <label for="time" class="filter__label">Set Your Delivery Time:</label>

                            <div class="filter__select-wrap">
                                <select name="time" id="time" class="filter__select">
                                    <option>3 Days</option>
                                    <option>5 Days</option>
                                    <option>10 Days</option>
                                    <option>15 Days</option>
                                    <option>20 Days</option>
                                    <option>25 Days</option>
                                    <option>30 Days</option>
                                    <option>60 Days</option>
                                </select>
                            </div>
                        </div>

                        <div class="filter__group">
                            <button class="filter__btn" type="button"><span>Place a bid</span></button>
                        </div>
                    </div>
                </div>
                <!-- end filter -->

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