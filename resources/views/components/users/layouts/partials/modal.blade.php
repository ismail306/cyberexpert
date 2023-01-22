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
                    <h2 class="text-uppercase text-center mb-3">Create an account</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example1cg">Your Name</label>
                            <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" />

                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example3cg">Your Email</label>
                            <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />

                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example4cg">Password</label>
                            <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />

                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                            <input type="password" name="password_confirmation" id="form3Example4cdg" class="form-control form-control-lg" />

                        </div>

                        <div class="form-check d-flex justify-content-center mb-2">
                            <input class="form-check-input checkposition mb-1 mr-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label" for="form2Example3g">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn  btn-success btn-block btn-lg gradient-custom-4 ">Register</button>
                        </div>

                        <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="{{route('login')}}" class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>

                </div>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

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

                    <h2 class="text-uppercase text-center mb-2">Contact With Specialist</h2>

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

                        <button class="btn btn-primary" type="button"><i class="fa fa-paper-plane"></i> Send</button>

                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>



<div>
    <!-- Answer modal Start -->

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

                        <h2 class="text-uppercase text-center mb-2">Answer this Question</h2>


                        <form action="{{ route('answer.store') }}" method="POST">
                            @csrf

                            <input type="text" hidden name="user_pk" value="{{isset(Auth::user()->id)?(Auth::user()->id) :''}}">
                            <input type="text" hidden id="question_id_value" name="question_id">

                            <div class="form-group text-dark">
                                <label class="text-dark" id="" for="message"></label>
                                <br>
                                <textarea class="form-message" id="message" name="answer"></textarea>
                            </div>

                            <button class="btn btn-primary ml-3" type="submit"><i class="fa fa-reply"></i> Replay </button>

                        </form>

                    </div>

                </div>
                <div class="modal-footer">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

</div>


<!-- update modal Start -->

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="contact-box ">

                    <h2 class="text-uppercase text-center mb-2">Update this Answer</h2>
                    @if(Auth::user())

                    <form action="{{ route('answer.edit')}}" method="POST">
                        @csrf


                        <input type="text" hidden id="answer_id_value" name="id">


                        <div class="form-group text-dark">
                            <label class="text-dark" for="message"></label>
                            <br>
                            <textarea class="form-message" id="answer_value" name="answer"></textarea>
                        </div>

                        <button class="btn btn-primary btn-design" type="submit">Update </button>

                    </form>
                    @endif
                </div>

            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update Modal End -->