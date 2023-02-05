<x-users.layouts.master>
    <div class="container bootstrap snippets bootdey">


        <div class="omb_login">
            <h3 class="omb_authTitle">Create an account</h3>

            <div class="row omb_row-sm-offset-3">
                <div class="col-xs-12 col-sm-6">
                    <form method="POST" name='signinform' action="{{ route('register') }}" onsubmit="return validateform()">
                        @csrf

                        <div class="form-outline input-group mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-user"></i></span>
                            <input type="text" required name="name" class=" form-control" placeholder="your name" />


                        </div>

                        <div class="form-outline mt-3 input-group mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-envelope"></i></span>
                            <input type="email" required name="email" class="form-control" placeholder="mail" />

                        </div>

                        <div class="form-outline input-group mt-3 mb-2">
                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-lock"></i></span>
                            <input type="password" required name="password" class="form-control" placeholder="password" />


                        </div>

                        <div class="form-outline mt-3 mb-2 input-group">

                            <span class="input-group-addon pt-1 pr-1"><i class="fa fa-lock"></i></span>
                            <input type="password" required name="password_confirmation" class="form-control" placeholder="repeat password" />

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