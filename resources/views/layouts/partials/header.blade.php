
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-7 col-md-9 col-lg-8 col-xl-9">
                <div class="header__content">
                    <!-- header menu btn -->
                    <button class="header__btn" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- end header menu btn -->

                    <!-- header logo -->
                    <a href="/" class="header__logo">
                        <img src="/assets/img/logo-light.png" alt="logo">
                    </a>
                    <!-- end header logo -->

                    <!-- header nav -->
                    <ul class="header__nav">
                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a href="/" class="header__nav-link">Home</a>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuProjects" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuProjects">
                                <li><a href="{{ route('projects') }}">Projects</a></li>
                                <li><a href="{{ route('sProject') }}">Single project</a></li>
                                <li><a href="{{ route('addProject') }}">Post a project</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuJobs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jobs</a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuJobs">
                                <li><a href="{{ route('jobs') }}">Jobs</a></li>
                                <li><a href="{{ route('job') }}">Single job</a></li>
                                <li><a href="{{ route('addJob') }}">Post a job</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCompanies" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Companies</a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCompanies">
                                <li><a href="{{ route('companies') }}">Companies</a></li>
                                <li><a href="{{ route('company') }}">Company profile</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuProfiles" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profiles</a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuProfiles">
                                <li><a href="{{ route('profiles') }}">Profiles</a></li>
                                <li><a href="{{ route('profile') }}">Profile</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->

                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuPages">
                                <li><a href="{{ route('messages') }}">Messages</a></li>
                                <li><a href="{{ route('faq') }}">Help Center</a></li>
                                <li><a href="{{ route('contacts') }}">Contacts</a></li>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="#">Sign In</a></li>
                                <li><a href="#">Sign Up</a></li>
                                <li><a href="#">Forgot password</a></li>
                            </ul>
                        </li>
                        <!-- end dropdown -->
                    </ul>
                    <!-- end header nav -->

                    <!-- header search -->
                    <form action="#" class="header__search">
                        <input class="header__search-input" type="text" placeholder="Search...">
                        <button class="header__search-button" type="button">
                            <i class="icon ion-ios-search"></i>
                        </button>
                    </form>
                    <!-- end header search -->
                </div>
            </div>

            <div class="col-5 col-md-3 col-lg-4 col-xl-3">
                <div class="header__content header__content--end">
                    <a href="{{ route('messages') }}" class="header__messages header__messages--active">
                        <i class="icon ion-ios-mail"></i>
                    </a>

                    <div class="header__notifications">
                        <a class="dropdown-toggle header__notifications-btn header__notifications-btn--active" href="#" role="button" id="dropdownMenuNotifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon ion-ios-notifications"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right header__dropdown-menu header__dropdown-menu--right header__dropdown-menu--ntf" aria-labelledby="dropdownMenuNotifications">
                            <div class="header__ntf">
                                <a href="#" class="header__ntf-img">
                                    <img src="/assets/img/user3.jpg" alt="">
                                </a>
                                <h6 class="header__ntf-title">
                                    <span>Marsha Baldwin</span> Comment on your project.
                                </h6>
                            </div>

                            <div class="header__ntf">
                                <a href="#" class="header__ntf-img">
                                    <img src="/assets/img/user7.jpg" alt="">
                                </a>
                                <h6 class="header__ntf-title">
                                    <span>Andy Ramos</span> Comment on your project.
                                </h6>
                            </div>

                            <div class="header__ntf">
                                <a href="#" class="header__ntf-img">
                                    <img src="/assets/img/user4.jpg" alt="">
                                </a>
                                <h6 class="header__ntf-title">
                                    <span>Sophia Mendoza</span> Comment on your project.
                                </h6>
                            </div>

                            <div class="header__ntf">
                                <a href="#" class="header__ntf-img">
                                    <img src="/assets/img/user1.jpg" alt="">
                                </a>
                                <h6 class="header__ntf-title">
                                    <span>Tony Young</span> Comment on your project.
                                </h6>
                            </div>

                            <a href="#" class="header__ntf-more">View more</a>
                        </div>
                    </div>

                    <div class="header__profile">
                        <a class="dropdown-toggle header__profile-btn" href="#" role="button" id="dropdownMenuProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="/assets/img/user5.jpg" alt="">
                            <span>John Doe</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right header__dropdown-menu header__dropdown-menu--right" aria-labelledby="dropdownMenuProfile">
                            <li><a href="{{ route('profile') }}"><i class="icon ion-ios-settings"></i> Settings</a></li>
                            <li><a href="{{ route('privacy') }}"><i class="icon ion-ios-lock"></i> Privacy</a></li>
                            <li><a href="{{ route('faq') }}"><i class="icon ion-ios-help-buoy"></i> FAQ</a></li>
                            <li><a href="#"><i class="icon ion-ios-exit"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>