<div class="body-inner">

    <!-- Header start -->
    <header id="header" class="header-one navbar-fixed">
        <div class="site-navigation">



            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="logo col-lg-2 text-center text-lg-left mb-2 mb-md-5 mb-lg-0">
                            <a class="d-block" href="{{route('cyberexpert')}}">
                                <img loading="lazy" src="/user/images/logo.png" alt="Cybere3xpert" />
                            </a>
                        </div>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-10">

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
                                    <a class="nav-link" href="{{route('questionanswer')}}">Q&A</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blog')}}">Blog</a>
                                </li>


                                @if(Auth::user())



                                <li class="nav-item dropdown ">

                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i>
                                        {{(Auth::user()->name);}}</a>



                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{route('user.profile')}}">Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{route('user.profileSetting')}}">Setting</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{route('logout')}}">
                                                @csrf
                                                <button type="submit" class="logout-btn ">Logout</button>
                                            </form>
                                        </li>

                                    </ul>
                                </li>


                                @else
                                <li class="nav-item dropdown ">

                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="fas fa-user mx-1"></i> User </a>


                                    <ul class="dropdown-menu" role="menu">
                                        <li class="nav-item">
                                            <a href="{{route('login')}}" class="btn">LogIn</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('register')}}" class="btn">Sign Up</a>
                                        </li>

                                    </ul>
                                </li>



                                @endif

                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->




            <!--/ Container end -->
        </div>
        <!--/ Navigation end -->
    </header>
    <!--/ Header end -->