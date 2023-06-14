@extends('layouts.master')

@section('content')


 	<!-- breadcrumb -->
     <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap">
                        <li class="breadcrumb__item"><a href="#">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">John Doe</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb -->

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- user -->
                <div class="user">
                    <div class="user__head">
                        <div class="user__img">
                            <img src="/assets/img/user5.jpg" alt="">
                        </div>
                    </div>
                    <div class="user__title">
                        <h2>John Doe</h2>
                        <p>Front-end Developer</p>

                        <div class="profile__actions">
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
                                <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                            </div>
                        </div>
                    </div>
                    <ul class="user__list">
                        <li><span>Hourly Rate:</span> <span>$50 / hr</span></li>
                        <li><span>Age:</span> <span>21</span></li>
                        <li><span>Experenice:</span> <span>5 Year</span></li>
                        <li><span>Job Done:</span> <span>113</span></li>
                    </ul>
                    <ul class="user__stats">
                        <li>
                            <p>Following</p>
                            <span>26</span>
                        </li>
                        <li>
                            <p>Followers</p>
                            <span>88</span>
                        </li>
                    </ul>
                </div>
                <!-- end user -->

                <!-- social -->
                <div class="sidebox">
                    <div class="sidebox__share">
                        <span>Social:</span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                            <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                            <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end social -->
            </div>

            <div class="col-12 col-md-7 col-lg-8 col-xl-6">
                <ul class="nav nav-tabs main__nav" id="main__nav" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="false">Feed</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="true">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Settings</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
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

                            <h2 class="post__title"><a href="project.html">PSD to HTML</a></h2>

                            <div class="post__options">
                                <p>$300 - $350</p>
                            </div>

                            <div class="post__description">
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
                                    <a class="post__comments" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse1"><i class="icon ion-ios-text"></i> <span>0</span></a>
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

                        <!-- post -->
                        <div class="post">
                            <div class="post__head">
                                <a href="#" class="post__head-img">
                                    <img src="/assets/img/user3.jpg" alt="">
                                </a>
                                <div class="post__head-title">
                                    <h5><a href="#">Sophia Mendoza</a></h5>
                                    <p>22 min ago</p>
                                </div>

                                <div class="post__dropdown">
                                    <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="icon ion-md-more"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu" aria-labelledby="dropdownMenu2">
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

                            <h2 class="post__title"><a href="project.html">PSD to HTML</a></h2>

                            <div class="post__options">
                                <p>$400 - $500</p>
                            </div>

                            <div class="post__description">
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
                                    <a class="post__comments" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse1"><i class="icon ion-ios-text"></i> <span>0</span></a>
                                </div>

                                <div class="post__views">
                                    <i class="icon ion-ios-eye"></i> <span>214</span>
                                </div>
                            </div>

                            <div class="collapse post__collapse" id="collapse2">
                                <form action="#" class="post__form">
                                    <input type="text" placeholder="Type your comment...">
                                    <button type="button"><i class="icon ion-ios-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- end post -->

                        <!-- post -->
                        <div class="post">
                            <div class="post__head">
                                <a href="#" class="post__head-img">
                                    <img src="/assets/img/user8.jpg" alt="">
                                </a>
                                <div class="post__head-title">
                                    <h5><a href="#">Santiago Robinson</a></h5>
                                    <p>37 min ago</p>
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

                            <h2 class="post__title"><a href="project.html">PSD to HTML</a></h2>

                            <div class="post__options">
                                <p>$100 - $150</p>
                            </div>

                            <div class="post__description">
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

                        <!-- view more -->
                        <button class="main__btn" type="button"><span>load more</span></button>
                        <!-- end view more -->
                    </div>

                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <!-- box -->
                        <div class="main__box">
                            <h3 class="main__box-title">About</h3>
                            <p class="main__box-text">It is a long fact that a reader will be <b>distracted</b> by the readable content of a page when <a href="#">looking</a> at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            <ul class="main__box-list">
                                <li>Theme Forest</li>
                                <li>Graphic River</li>
                                <li>Audio Jungle</li>
                                <li>3D Ocean</li>
                            </ul>
                            <p class="main__box-text">It is a long fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        </div>
                        <!-- end box -->

                        <!-- box -->
                        <div class="main__box">
                            <h3 class="main__box-title">Education</h3>
                            <p class="main__box-text"><b>Master of Computer Science</b><br> <span>2017-2019</span> <br>It is a long fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        </div>
                        <!-- end box -->

                        <!-- box -->
                        <div class="main__box">
                            <h3 class="main__box-title">Skills</h3>
                            <div class="post__tags">
                                <a href="#">HTML</a>
                                <a href="#">CSS</a>
                                <a href="#">PHP</a>
                                <a href="#">Laravel</a>
                                <a href="#">Vue Js</a>
                                <a href="#">React Js</a>
                                <a href="#">Stylus</a>
                            </div>
                        </div>
                        <!-- end box -->
                    </div>

                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <!-- form -->
                        <form action="#" class="form">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="form__title">Profile details</h2>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="login" class="form__label">Login:</label>
                                        <input name="login" id="login" type="text" class="form__input" placeholder="Login">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="email" class="form__label">Email:</label>
                                        <input name="email" id="email" type="text" class="form__input" placeholder="email@email.com">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="firstname" class="form__label">First name:</label>
                                        <input name="firstname" id="firstname" type="text" class="form__input" placeholder="John">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="lastname" class="form__label">Last name:</label>
                                        <input name="lastname" id="lastname" type="text" class="form__input" placeholder="Doe">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="form__btn" type="button"><span>Save</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->

                        <!-- form -->
                        <form action="#" class="form">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="form__title">Change password</h2>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="oldpass" class="form__label">Old password:</label>
                                        <input name="oldpass" id="oldpass" type="password" class="form__input">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="newpass" class="form__label">New Password:</label>
                                        <input name="newpass" id="newpass" type="password" class="form__input">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <label for="confirmpass" class="form__label">Confirm New Password:</label>
                                        <input name="confirmpass" id="confirmpass" type="password" class="form__input">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="form__btn" type="button"><span>Change</span></button>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- sidebox -->
                <div class="sidebox sidebox--desk">
                    <h4 class="sidebox__title">Hot projects</h4>
                    <div class="sidebox__content">
                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">PSD to HTML</a>
                                <span>$200 - $250</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Front-end Developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Mobile App</a>
                                <span>$7000</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Java Developer</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Landing page</a>
                                <span>$400</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>UX/UI Designer</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Site design</a>
                                <span>$4000 - $5000</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>UX/UI Designer</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">WP Plugin</a>
                                <span>$3800</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Wordpress developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="sidebox__more">View more</a>
                </div>
                <!-- end sidebox -->
            </div>
        </div>
    </div>

    
@endsection