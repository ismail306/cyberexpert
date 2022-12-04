<div class="body-inner">

    <!-- Header start -->
    <header id="header" class="header-one navbar-fixed">
        <div class="site-navigation">
            <div class="container">


                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-dark p-0">
                            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                                <a class="d-block" href="{{route('cyberexpert')}}">
                                    <img loading="lazy" src="user/images/logo.png" alt="Cybere3xpert" />
                                </a>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div id="navbar-collapse" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav mr-auto">

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('cyberexpert')}}">Home</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Learn Ethical Hacking
                                            <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{route('xss')}}">XSS</a>
                                            </li>
                                            <li>
                                                <a href="{{route('sql')}}">SQL Injection</a>
                                            </li>
                                            <li>
                                                <a href="{{route('brokenauthentication')}}">Broken Authentication</a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('specialist')}}">Hire Specialist</a>
                                    </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('news')}}">News</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('questionanswer')}}">Q/A</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('blog')}}">Blog</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#login">Sign In</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#signup">Sign Up</a>
                                    </li>

                                    <!-- <li>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <div class="dropdown-menu" style="left: -100%;">
                                                <a class="dropdown-item" href="#">Profile</a>

                                                <a class="dropdown-item" onclick="event.preventDefault();document.querySelector('#logout').submit();">Logout</a>
                                            </div>
                                        </div>

                                    </li> -->


                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--/ Col end -->
                </div>
                <!--/ Row end -->
                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div>

                <!-- Search end -->
                <div class="search-block" style="display: none">
                    <label for="search-field" class="w-100 mb-0">
                        <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter" />
                    </label>
                    <span class="search-close">&times;</span>
                </div>
                <!-- Site search end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Navigation end -->
    </header>
    <!--/ Header end -->