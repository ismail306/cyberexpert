<x-users.layouts.master>


    <div class="container bootstrap snippets bootdey">


        <div class="omb_login">
            <h3 class="omb_authTitle">Login or <a href="#">Sign up</a></h3>
            <div class="row omb_row-sm-offset-3 omb_socialButtons">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span class="hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">Twitter</span>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-google">
                        <i class="fa fa-google-plus visible-xs"></i>
                        <span class="hidden-xs">Google+</span>
                    </a>
                </div>
            </div>

            <div class="row omb_row-sm-offset-3 omb_loginOr">
                <div class="col-xs-12 col-sm-6">
                    <hr class="omb_hrOr">
                    <span class="omb_spanOr">or</span>
                </div>
            </div>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    <form class="omb_loginForm" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-user"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="email address">
                        </div>
                        <span class="help-block"></span>

                        <div class="input-group mt-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <button class="btn btn-lg m-3 btn-success " type="submit">Login</button>
                        </div>

                    </form>
                </div>
            </div>


            <div class="d-flex justify-content-center align-items-center">
                <p class="omb_forgotPwd">
                    <a href="{{ route('password.email') }}">Forgot password?</a>
                </p>
            </div>

        </div>



    </div>
</x-users.layouts.master>