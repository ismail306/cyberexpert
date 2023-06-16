<div class="body-inner">

    <!-- Header start -->
    <header id="header" class="header-one navbar-fixed">
        <div class="site-navigation">



            <div class="row">
                <div class="col-lg-12 ">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <div class="container">
                            <a class="navbar-brand logo" href="{{route('cyberexpert')}}">
                                <img loading="lazy" src="{{asset('user/images/logo.png')}}" alt="Cybere3xpert" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Learn Ethical Hacking <i class="fa fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('xss')}}">XSS</a></li>
                                            <li><a href="{{route('sql')}}">SQL Injection</a></li>
                                            <li><a href="{{route('brokenauthentication')}}">Broken Authentication</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('specialist')}}">Hire Specialist</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('news')}}">News</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('questionanswer')}}">Q&A</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                                    @if(Auth::user())
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-user mx-1"></i>{{(Auth::user()->name);}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('user.profile')}}"><i class="fas fa-user mr-2"></i>Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <form method="POST" action="{{route('logout')}}">
                                                @csrf
                                                <button type="submit" class="dropdown-item"> <i class=" fas fa-sharp fa-light fa-power-off mr-1"></i> Logout</button>
                                            </form>
                                        </div>
                                    </li>
                                    @else
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-user mx-1"></i>User
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{route('login')}}">LogIn</a>
                                            <a class="dropdown-item" href="{{route('register')}}">Sign Up</a>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
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