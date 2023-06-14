@extends('layouts.master')

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap">
                        <li class="breadcrumb__item"><a href="#">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Jobs</li>
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
                            <label for="sort" class="filter__label">Sort by:</label>

                            <div class="filter__select-wrap">
                                <select name="sort" id="sort" class="filter__select">
                                    <option value="0">Relevance</option>
                                    <option value="1">Newest</option>
                                    <option value="2">Oldest</option>
                                </select>
                            </div>
                        </div>

                        <div class="filter__group">
                            <label for="categoty" class="filter__label">Category:</label>

                            <div class="filter__select-wrap">
                                <select name="categoty" id="categoty" class="filter__select">
                                    <option>Admin Support</option>
                                    <option>Customer Service</option>
                                    <option>Data Analytics</option>
                                    <option>Design & Creative</option>
                                    <option>Legal</option>
                                    <option>Software Developing</option>
                                    <option>IT & Networking</option>
                                    <option>Writing</option>
                                    <option>Translation</option>
                                    <option>Sales & Marketing</option>
                                </select>
                            </div>
                        </div>

                        <div class="filter__group">
                            <label class="filter__label">Job type:</label>
                            <ul class="filter__checkboxes">
                                <li>
                                    <input id="type1" type="checkbox" name="type1" checked="">
                                    <label for="type1">Freelance</label>
                                </li>
                                <li>
                                    <input id="type2" type="checkbox" name="type2">
                                    <label for="type2">Full Time</label>
                                </li>
                                <li>
                                    <input id="type3" type="checkbox" name="type3">
                                    <label for="type3">Part Time</label>
                                </li>
                            </ul>
                        </div>

                        <div class="filter__group">
                            <label class="filter__label">Pay Rate / Hr ($):</label>

                            <div class="filter__range">
                                <div id="filter__range-start"></div>
                                <div id="filter__range-end"></div>
                            </div>

                            <div id="filter__range"></div>
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

            <div class="col-12 col-md-7 col-lg-8 col-xl-6">
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

                    <h2 class="post__title"><a href="job.html">Senior Vue Js Developer</a></h2>

                    <div class="post__options">
                        <span>Full time</span>
                        <p>$41/hr</p>
                    </div>

                    <div class="post__description">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>

                    <div class="post__tags">
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">Js</a>
                        <a href="#">Vue Js</a>
                    </div>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>21</span></a>
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

                    <h2 class="post__title"><a href="job.html">Senior Front-end Developer</a></h2>

                    <div class="post__options">
                        <span>Full time</span>
                        <p>$32/hr</p>
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
                            <a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>17</span></a>
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

                <!-- post -->
                <div class="post">
                    <div class="post__head">
                        <a href="#" class="post__head-img">
                            <img src="/assets/img/user8.jpg" alt="">
                        </a>
                        <div class="post__head-title">
                            <h5><a href="#">Santiago Robinson</a></h5>
                            <p>36 min ago</p>
                        </div>

                        <div class="post__dropdown">
                            <a class="dropdown-toggle post__dropdown-btn" href="#" role="button" id="dropdownMenu0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon ion-md-more"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right post__dropdown-menu" aria-labelledby="dropdownMenu0">
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
                        <a href="#">Wordpress</a>
                    </div>

                    <div class="post__stats">
                        <div>
                            <a class="post__likes" href="#"><i class="icon ion-ios-heart"></i> <span>15</span></a>
                            <a class="post__comments" data-toggle="collapse" href="#collapse0" role="button" aria-expanded="false" aria-controls="collapse1"><i class="icon ion-ios-text"></i> <span>0</span></a>
                        </div>

                        <div class="post__views">
                            <i class="icon ion-ios-eye"></i> <span>214</span>
                        </div>
                    </div>

                    <div class="collapse post__collapse" id="collapse0">
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

            <div class="col-12 col-md-5 col-lg-4 col-xl-3">
                <!-- sidebox -->
                <div class="sidebox sidebox--desk">
                    <h4 class="sidebox__title">Hot jobs</h4>
                    <div class="sidebox__content">
                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Front-end Developer</a>
                                <span>$39/hr</span>
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
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">UI/UX Designer</a>
                                <span>$54/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Software LTD</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>USA</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Back-end Developer</a>
                                <span>$72/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Digital LTD</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>Czech</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Project Manager</a>
                                <span>$42/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Themeforest</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>Greece</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Java Developer</a>
                                <span>$38/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>iJob</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>Russia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="sidebox__more">View more</a>
                </div>
                <!-- end sidebox -->

                <!-- sidebox -->
                <div class="sidebox sidebox--desk">
                    <h4 class="sidebox__title">New jobs</h4>
                    <div class="sidebox__content">
                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Front-end Developer</a>
                                <span>$39/hr</span>
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
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">UI/UX Designer</a>
                                <span>$54/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Software LTD</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>USA</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Back-end Developer</a>
                                <span>$72/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Digital LTD</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>Czech</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Project Manager</a>
                                <span>$42/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>Themeforest</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>Greece</span>
                                </div>
                            </div>
                        </div>

                        <div class="sidebox__job">
                            <div class="sidebox__job-title">
                                <a href="#">Java Developer</a>
                                <span>$38/hr</span>
                            </div>
                            <div class="post__wrap">
                                <div class="post__company">
                                    <i class="icon ion-ios-briefcase"></i>
                                    <span>iJob</span>
                                </div>

                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>Russia</span>
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