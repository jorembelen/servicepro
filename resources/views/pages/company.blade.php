@extends('layouts.master')

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap">
                        <li class="breadcrumb__item"><a href="#">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Themeforest</li>
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
                            <img src="/assets/img/company.svg" alt="">
                        </div>
                    </div>
                    <div class="user__title">
                        <h2>Themeforest</h2>
                        <p>Digital services</p>

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
                            </div>
                        </div>
                    </div>
                    <ul class="user__list">
                        <li><span>Hotline:</span> <span>+1(272) 576-80-96</span></li>
                        <li><span>Email:</span> <span>envato@envato.com</span></li>
                        <li><span>Website:</span> <span><a href="https://themeforest.net/user/dmitryvolkov/portfolio" target="_blank">iJob.com</a></span></li>
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
                                    <img src="/assets/img/user9.jpg" alt="">
                                </a>
                                <div class="post__head-title">
                                    <h5><a href="#">Sebastian Lee</a></h5>
                                    <p>12 min ago</p>
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

                            <h2 class="post__title"><a href="job.html">Senior Front-end Developer</a></h2>

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
                                <a href="#">Js</a>
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
                                    <img src="/assets/img/user5.jpg" alt="">
                                </a>
                                <div class="post__head-title">
                                    <h5><a href="#">John Doe</a></h5>
                                    <p>15 min ago</p>
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

                            <h2 class="post__title"><a href="job.html">Senior Wordpress Developer</a></h2>

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

                            <div class="post__stats">
                                <div>
                                    <a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>15</span></a>
                                    <a class="post__comments" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2"><i class="icon ion-ios-text"></i> <span>2</span></a>
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

                                <div class="post__comment">
                                    <a href="#" class="post__comment-img">
                                        <img src="/assets/img/user.svg" alt="">
                                    </a>
                                    <div class="post__comment-title">
                                        <h5><a href="#">John Doe</a></h5>
                                        <p>11 min ago</p>
                                    </div>

                                    <p class="post__comment-text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                </div>

                                <div class="post__comment">
                                    <a href="#" class="post__comment-img">
                                        <img src="/assets/img/user.svg" alt="">
                                    </a>
                                    <div class="post__comment-title">
                                        <h5><a href="#">John Doe</a></h5>
                                        <p>11 min ago</p>
                                    </div>

                                    <p class="post__comment-text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end post -->

                        <!-- post -->
                        <div class="post">
                            <div class="post__head">
                                <a href="#" class="post__head-img">
                                    <img src="/assets/img/user2.jpg" alt="">
                                </a>
                                <div class="post__head-title">
                                    <h5><a href="#">Andy Ramos</a></h5>
                                    <p>19 min ago</p>
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

                            <h2 class="post__title"><a href="job.html">Wordpress Developer</a></h2>

                            <div class="post__options">
                                <span>Full time</span>
                                <p>$30/hr</p>
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

                            <div class="post__stats">
                                <div>
                                    <a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>11</span></a>
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
                            <h3 class="main__box-title">Overview</h3>
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
                            <h3 class="main__box-title">Since</h3>
                            <p class="main__box-text">February 2004</p>
                        </div>
                        <!-- end box -->

                        <!-- box -->
                        <div class="main__box">
                            <h3 class="main__box-title">Total employers</h3>
                            <p class="main__box-text">2 308</p>
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
                    <h4 class="sidebox__title">Best candidates</h4>
                    <div class="sidebox__content">
                        <div class="sidebox__user">
                            <a href="#" class="sidebox__user-img">
                                <img src="/assets/img/user7.jpg" alt="">
                            </a>
                            <div class="sidebox__user-title">
                                <h5><a href="#">Andy Ramos</a></h5>
                                <p>Secretary</p>
                            </div>
                            <div class="sidebox__user-price">$99/hr</div>
                        </div>

                        <div class="sidebox__user">
                            <a href="#" class="sidebox__user-img">
                                <img src="/assets/img/user1.jpg" alt="">
                            </a>
                            <div class="sidebox__user-title">
                                <h5><a href="#">Tony Young</a></h5>
                                <p>Herbalist</p>
                            </div>
                            <div class="sidebox__user-price">$112/hr</div>
                        </div>

                        <div class="sidebox__user">
                            <a href="#" class="sidebox__user-img">
                                <img src="/assets/img/user2.jpg" alt="">
                            </a>
                            <div class="sidebox__user-title">
                                <h5><a href="#">Santiago Robinson</a></h5>
                                <p>Fashion designer</p>
                            </div>
                            <div class="sidebox__user-price">$133/hr</div>
                        </div>

                        <div class="sidebox__user">
                            <a href="#" class="sidebox__user-img">
                                <img src="/assets/img/user3.jpg" alt="">
                            </a>
                            <div class="sidebox__user-title">
                                <h5><a href="#">Sophia Mendoza</a></h5>
                                <p>Teaching assistant</p>
                            </div>
                            <div class="sidebox__user-price">$80/hr</div>
                        </div>

                        <div class="sidebox__user">
                            <a href="#" class="sidebox__user-img">
                                <img src="/assets/img/user4.jpg" alt="">
                            </a>
                            <div class="sidebox__user-title">
                                <h5><a href="#">Marsha Baldwin</a></h5>
                                <p>Gardener</p>
                            </div>
                            <div class="sidebox__user-price">$99/hr</div>
                        </div>
                    </div>
                    <a href="#" class="sidebox__more">View more</a>
                </div>
                <!-- end sidebox -->
            </div>
        </div>
    </div>
 
    
@endsection