@extends('layouts.master')

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb__wrap">
                        <li class="breadcrumb__item"><a href="#">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Profiles</li>
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

            <div class="col-12 col-md-7 col-lg-8 col-xl-9">
                <div class="row">
                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user5.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">John Doe</a></h2>
                                
                                <p class="profile__text">Graphic Designer</p>
                            </div>

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
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user9.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Santiago Robinson</a></h2>
                                
                                <p class="profile__text">Fashion designer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user8.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Tony Young</a></h2>
                                
                                <p class="profile__text">Herbalist</p>
                            </div>

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
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user2.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Andy Ramos</a></h2>
                                
                                <p class="profile__text">Secretary</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user8.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Sophia Mendoza</a></h2>
                                
                                <p class="profile__text">Teaching assistant</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user3.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Marsha Baldwin</a></h2>
                                
                                <p class="profile__text">Gardener</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user7.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Sebastian Lee</a></h2>
                                
                                <p class="profile__text">Graphic Designer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user5.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">John Doe</a></h2>
                                
                                <p class="profile__text">Front-end Developer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user9.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Diego Costa</a></h2>
                                
                                <p class="profile__text">Graphic Designer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user8.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Alan Patrick</a></h2>
                                
                                <p class="profile__text">UX/UI Designer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user7.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Tony Young</a></h2>
                                
                                <p class="profile__text">Herbalist</p>
                            </div>

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
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user5.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">John Foe</a></h2>
                                
                                <p class="profile__text">UX/UI Designer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user1.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Gabriel</a></h2>
                                
                                <p class="profile__text">Web Developer</p>
                            </div>

                            <div class="profile__actions">
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
                                    <a href="#" class="post__actions-btn post__actions-btn--blue"><span>Hire</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user5.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">John Doe</a></h2>
                                
                                <p class="profile__text">Graphic Designer</p>
                            </div>

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
                    </div>
                    <!-- end profile -->

                    <!-- profile -->
                    <div class="col-12 col-sm-6 col-md-12 col-lg-4">
                        <div class="profile">
                            <div class="profile__logo">
                                <img src="/assets/img/user3.jpg" alt="">
                            </div>
                            
                            <div class="profile__wrap">
                                <h2 class="profile__title"><a href="#">Rosa Lee</a></h2>
                                
                                <p class="profile__text">Secretary</p>
                            </div>

                            <div class="profile__actions">
                                <div class="post__location">
                                    <i class="icon ion-ios-navigate"></i>
                                    <span>France</span>
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
                    </div>
                    <!-- end profile -->

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