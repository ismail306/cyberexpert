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


        <div class=" card omb_login">
            <h3 class="  omb_authTitle">Create an account</h3>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    <form method="POST" name='signinform' onsubmit="return validateform()" action="{{ route('register') }}">
                        @csrf

                        <div class="form-outline input-group mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-user"></i></span>
                            <input type="text" required name="name" class=" form-control" placeholder="Name" />
                            @error('name')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-outline input-group mt-3 mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-phone"></i></span>
                            <input type="tel" class="form-control" required name="phone" pattern="[0-1]{2}[3,4,5,6,7,8,9]{1}[0-9]{8}" placeholder="01(3-9)xxxxxxxx">
                            @error('phone')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-outline mt-3 input-group mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-envelope"></i></span>
                            <input type="email" required name="email" class="form-control" placeholder="Email" />
                            @error('email')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror

                        </div>

                        <div class="form-outline input-group mt-3 mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-lock"></i></span>
                            <input type="password" required name="password" class="form-control" placeholder="Password" />
                            @error('password')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-outline mt-3 mb-2 input-group">

                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-lock"></i></span>
                            <input type="password" required name="password_confirmation" class="form-control" placeholder="Repeat password" />
                            @error('password_confirmation')
                            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror


                        </div>
                        <div>
                            <p class="ml-3" id="passvalidation" style="color:red"></p>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-2">
                            <input class="form-check-input checkposition mb-1 mr-2" type="checkbox" value="" id="termsCheckbox" />
                            <label class="form-check-label" for="termsCheckbox">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" id="registerButton" disabled class="btn  btn-success btn gradient-custom-4 ">Register</button>
                        </div>

                        <p class="text-center text-muted mt-3 mb-4">Have already an account? <a href="{{route('login')}}" class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>
                </div>
            </div>




        </div>
    </div>





</x-users.layouts.master>