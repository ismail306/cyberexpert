<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="text-uppercase text-center mb-5">Log In</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form2Example1" name="email" class="form-control" />
                        <label class="form-label" for="form2Example1">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example2" class="form-control" />
                        <label class="form-label" for="form2Example2">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Submit button -->

                    <button type="submit" class="btn btn-dark btn-block mb-4 gradient-custom-4 ">Sign in</button>

                </form>
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="#" data-toggle="modal" data-target="#signup">Register</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-design btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div>
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1cg">Your Name</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example3cg">Your Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password_confirmation" id="form3Example4cdg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input checkposition me-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label" for="form2Example3g">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-design btn-dark btn-block btn-lg gradient-custom-4 ">Register</button>
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>

                </div>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="button" class="btn btn-design btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="contact-box ">

                    <h2 class="text-uppercase text-center mb-5">Contact With Specialist</h2>

                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input class="form-control" id="name" type="text" name="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Subject</label>
                            <input class="form-control" id="email" type="email" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="message">Descrive your Problem</label>
                            <br>
                            <textarea class="form-message" id="message" name="Message"></textarea>
                        </div>

                        <button class="btn btn-primary btn-design" type="button"><i class="fa fa-paper-plane"></i> Send</button>

                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="button" class="btn btn-design btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="answer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="contact-box ">

                    <h2 class="text-uppercase text-center mb-5">Answer this Question</h2>

                    <form action="#" method="post">

                        <div class="form-group">
                            <label for="message">Descrive your Problem</label>
                            <br>
                            <textarea class="form-message" id="message" name="Message"></textarea>
                        </div>

                        <button class="btn btn-primary btn-design" type="button"><i class="fa fa-reply"></i> </button>

                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="button" class="btn btn-design btn-primary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>