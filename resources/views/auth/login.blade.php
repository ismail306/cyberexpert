<x-users.layouts.master>


    <style>
        .card {
            width: auto;
            margin: 50px auto;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .omb_loginForm {
            padding: 10px;
        }
    </style>

    <div class="container bootstrap snippets bootdey">


        <div class=" mt-4 omb_login">
            <div class="card">
                <h3 class="  omb_authTitle" data-toggle="modal" data-target="#signup">Login or <a href="{{route('register')}}">Sign up</a></h3>
                <div class="row omb_row-sm-offset-3 omb_socialButtons">


                    <div class="col-xs-12 col-sm-6">
                        <a href="{{route('google-auth')}}" class="btn btn-block omb_btn-google">
                            <i class="fa fa-google-plus visible-xs"></i>
                            <span class="hidden-xs">Google+</span>
                        </a>
                    </div>
                </div>

                <div class="row omb_row-sm-offset-3 omb_loginOr">
                    <div class="col-xs-12 col-sm-6">
                        <hr class="omb_hrOr">
                        <span class="omb_spanOr">OR</span>
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

                            <x-input-error :messages="$errors->get('email')" class="mt-4 ml-3 text-danger" />


                            <span class="help-block"></span>

                            <div class="input-group mt-2">
                                <span class="input-group-addon pt-1 pr-1"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            <div class="d-flex justify-content-center align-items-center">
                                <button class="btn m-3 btn-success " type="submit">Login</button>
                            </div>

                        </form>
                    </div>
                </div>


                <div class="d-flex justify-content-center align-items-center">
                    @if (Route::has('password.request'))
                    <p class="omb_forgotPwd">
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </p>
                    @endif
                </div>

            </div>


        </div>



    </div>
</x-users.layouts.master>